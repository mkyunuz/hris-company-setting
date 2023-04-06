<?php 
namespace App\Builder;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class TaxBuilder{


    private $statusPajak = null;
    private $percentageJabatan = 5;

    private $basicSalary = 0; # Gaji Pokok
    private $fixedAllowanceAndOther = 0; #Tunjangan Tetap Lainnya
    private $tantiemBonusOrThr = 0; # Tantiem, Bonus dan THR
    private $subsidyPph = 0; # Tunjangan PPh
    private $totalBruto = 0; #Jumah Penghasilan Bruto

    
    private $maxJabatan = 500000; 
    private $jabatan = 0; # Biaya Jabatan
    private $netto = 0; #Penghasilan Neto
    
    private $annualizedIncome = 0; #Penghasilan disetahunkan
    private $ptkp = 0; #Penghasilan Tidak Kena Pajak
    private $pkp = 0; # Penghasilan Kena Pajak

    
    private $PPh21PayableYear = 0; #PPh 21 terutang (Setahun)
    private $PPh21ThisMonth = 0; #PPh 21 atas Gaji Bulan ini
    private $pphCounter = 0;
    // private $x = 0;
    public $tarif = 0;
    // private $target = 0;
    private $gajiBersihBulanIni = 0;
    private $adjustCount = 0;
    public $amountPph21ThisMonth = 0; #Jumalah PPh 21 Bulan ini
    public function __construct()
    {
        
    }
    
    public function resolve($target = 0)
    {
        $this->target = $target;
        $this->calculateBruto();
        $this->calculatePositionAllowance();
        $this->calculateNetto();
        $this->calculateAnnualizedIncome();
        $this->calculatePtkp();
        $this->calculatePkp();
        // $this->get
        $this->calculatePph();
        $this->calculatePphGrossUp();
        return $this;
    }

    public function setBasicSalary($basicSalary)
    {
        $this->basicSalary = $basicSalary;
        return $this;
    }

    public function setFixedAllowanceAndOther($fixedAllowanceAndOther)
    {
        $this->fixedAllowanceAndOther = $fixedAllowanceAndOther;
        return $this;
    }

    public function setTantiemBonusOrThr($tantiemBonusOrThr)
    {
        $this->tantiemBonusOrThr = $tantiemBonusOrThr;
        return $this;
    }

    public function setStatusPajak($statusPajak)
    {
        $this->statusPajak = $statusPajak;
    }
    
    public function calculatePositionAllowance()
    {
        $tmp = $this->totalBruto * ($this->percentageJabatan / 100);
        $this->jabatan = ($tmp > $this->maxJabatan) ? $this->maxJabatan : $tmp;
        // Log::in
    }

    public function calculateBruto()
    {
        $this->totalBruto = $this->basicSalary + $this->subsidyPph + $this->fixedAllowanceAndOther + $this->tantiemBonusOrThr;
    }

    public function calculateNetto()
    {
        $this->netto = $this->totalBruto - $this->jabatan;
    }



    public function calculateAnnualizedIncome()
    {
        $this->annualizedIncome = $this->netto * 12;
    }

    public function calculatePtkp()
    {
        $this->ptkp = Arr::get($this->rangeOfPktp(), $this->statusPajak);
    }

    private function calculatePkp()
    {
        $this->pkp = $this->roundDown(($this->annualizedIncome - $this->ptkp), 1000);
        
        $this->checkTarif($this->pkp);
    }

    private function roundDown($number, $x){
        $b = $number % $x;
        if($b != 0) {
            $number -= $b;
        }

        return $number;
    }
    private function calculatePphGrossUp()
    {

        // Lapisan 1 dengan Penghasilan Kena Pajak (PKP) Rp 0 – Rp47.500.000 (PKP setahun – 0) x 5/95 + 0,
        // Lapisan 2 dengan Penghasilan Kena Pajak (PKP) Rp47.500.000 – Rp217.500.000 (PKP setahun – Rp47.500.000) x 15/85 + Rp2.500.000,
        // Lapisan 3 dengan Penghasilan Kena Pajak (PKP) Rp217.500.000 – Rp405.000.000 (PKP setahun – Rp217.500.000) x 25/75 + Rp32.500.000,
        // Lapisan 4 dengan Penghasilan Kena Pajak (PKP) Lebih dari Rp405.000.000
        // (PKP setahun – Rp405.000.000) x 30/70 + Rp95.000.000.
        $tarifs = [5, 15, 25, 30, 35];
        $abs = [95, 85, 75, 95, 35];
        $lapis = [5000000000, 500000000, 250000000,60000000, 0];
        $filterd = array_filter($lapis, function($item){
            return $item <= $this->pkp;
        });
        $x = array_reverse($filterd);
        $dec = $this->pkp;
        $rv = count($filterd) - 1;
        $taxs=0;
        foreach($filterd as $a => $b){
            $object = $dec-$b;
            // echo $object. " => ".$tarifs[$rv]. "<br/>" ;
            $taxs += $object * ($tarifs[$rv] / 100);
            // echo $taxs. "<br/>" ;
            $dec = $b;
            $rv--;
        }
        // print($pph21);
        $this->PPh21PayableYear =  $taxs;
        $this->PPh21ThisMonth = $this->PPh21PayableYear / 12;
        $this->amountPph21ThisMonth = round($this->PPh21ThisMonth);
        $this->gajiBersihBulanIni = $this->totalBruto - $this->PPh21ThisMonth;
    }
    
    private function calculatePph()
    {
        $tarifs = [5, 15, 25, 30, 35];
        $lapis = [5000000000, 500000000, 250000000,60000000, 0];
        $filterd = array_filter($lapis, function($item){
            return $item <= $this->pkp;
        });
        $x = array_reverse($filterd);
        $dec = $this->pkp;
        $rv = count($filterd) - 1;
        $taxs=0;
        foreach($filterd as $a => $b){
            $object = $dec-$b;
            // echo $object. " => ".$tarifs[$rv]. "<br/>" ;
            $taxs += $object * ($tarifs[$rv] / 100);
            // echo $taxs. "<br/>" ;
            $dec = $b;
            $rv--;
        }
        // print($pph21);
        $this->PPh21PayableYear =  $taxs;
        // if($this->basicSalary > 50000000){
            $this->PPh21PayableYear =  $this->roundDown($taxs, 1000);
        // }
        $this->PPh21ThisMonth = $this->PPh21PayableYear / 12;
        $this->amountPph21ThisMonth = round($this->PPh21ThisMonth);
        $this->gajiBersihBulanIni = $this->totalBruto - $this->PPh21ThisMonth;

        // Log::info($this->target - $this->gajiBersihBulanIni);
        // if($this->target > 0){
        // if($this->target > 0 && $this->gajiBersihBulanIni < $this->target){
        //     $ts = 1;
            
            
        //     $pengali = 1;
        //     // if($this->amountPph21ThisMonth > 1000000) {
        //     //     $pengali = 100;
        //     // }else if($this->amountPph21ThisMonth > 5000000) {
        //     //     $pengali = 1000;
        //     // }else if($this->amountPph21ThisMonth > 10000000) {
        //     //     $pengali = 10000;
        //     // } else if($this->amountPph21ThisMonth > 10000000){
        //     //     // $pengali = 1000;
        //     // }
        //     $this->subsidyPph += ($this->subsidyPph == 0) ? $this->amountPph21ThisMonth : $pengali;
            
          
        //     $this->resolve($this->target);
        // }

            
        // if($this->target > 0 && $this->gajiBersihBulanIni < $this->target){
        //     $pengali = 1000;
        //     // if($this->amountPph21ThisMonth > 1000000) {
        //     //     $pengali = 10;
        //     // } if($this->amountPph21ThisMonth > 30000000) {
        //     //     $pengali = 1000;
        //     // } else if($this->amountPph21ThisMonth > 5000000) {
        //     //     $pengali = 1000;
        //     // }else if($this->amountPph21ThisMonth > 10000000) {
        //     //     $pengali = 10000;
        //     // } else if($this->amountPph21ThisMonth > 10000000){
        //     //     $pengali = 1000;
        //     // }
            
        //     $this->subsidyPph += $pengali;
        //     $this->resolve($this->target);
        // }
    }

    private function checkTarif($pkp)
    {
        // $a = 0;
        // if($pkp <= 60000000) {
        //     echo  $this->pkp * (5/100);
        //     $a += $this->pkp * (5/100);
        // }
        // if($pkp <= 250000000) {
        //     $a += ($this->pkp - 60000000) * (15 / 100);
        // }
        // if($pkp <= 500000000) {
        //     // $a += ($this->pkp - 250000000) * (25 / 100);
        // } 
        // if($pkp > 5000000000) {
        //     // $a += ($this->pkp - 500000000) * (30 / 100);
        // }
        // $this->PPh21PayableYear = $a;
    }
    // private function
    public function rageOfPkp()
    {
        return [
            [
                "max" => [47500000], 
                "formula" => "(@PKP – 0) x 5/95 + 0" 
            ],
            [
                "range" => [47500000 , 217500000], 
                "formula" => "(@PKP – Rp47500000) x 15/85 + Rp2.500.000" 
            ],
            [
                "range" => [217500000 , 405000000], 
                "formula" => "(@PKP – Rp217500000) x 25/75 + Rp32.500.000" 
            ],
            [
                "range" => [405000000], 
                "formula" => "(@PKP – Rp217500000) x 25/75 + Rp32.500.000" 
            ],
        ];
    }

    public function rangeOfPktp(){
        return [
            "TK/0" => 54000000,
            "TK/1" => 58500000,
            "TK/2" => 63000000,
            "TK/3" => 67500000,
            "K/0" => 58500000,
            "K/1" => 63000000,
            "K/2" => 67500000,
            "K/3" => 72000000,
            "K/I/0" => 112500000,
            "K/I/1" => 117000000,
            "K/I/2" => 121500000,
            "K/I/3" => 126000000,
        ];
    }


    private function backupcalculatePph()
    {
        $tarifs = [5, 15, 25, 30, 35];
        $lapis = [5000000000, 500000000, 250000000,60000000, 0];
        $filterd = array_filter($lapis, function($item){
            return $item <= $this->pkp;
        });
        $x = array_reverse($filterd);
        $dec = $this->pkp;
        $rv = count($filterd) - 1;
        $taxs=0;
        foreach($filterd as $a => $b){
            $object = $dec-$b;
            // echo $object. " => ".$tarifs[$rv]. "<br/>" ;
            $taxs += $object * ($tarifs[$rv] / 100);
            // echo $taxs. "<br/>" ;
            $dec = $b;
            $rv--;
        }
        // print($pph21);
        // $this->PPh21PayableYear =  $this->roundDown($taxs, 1000);
        $this->PPh21PayableYear =  $taxs;
        $this->PPh21ThisMonth = $this->PPh21PayableYear / 12;
        $this->amountPph21ThisMonth = round($this->PPh21ThisMonth);
        $this->gajiBersihBulanIni = $this->totalBruto - $this->PPh21ThisMonth;

        // Log::info($this->totalBruto - $this->gajiBersihBulanIni);
        // if($this->target > 0){
        if($this->target > 0 && $this->gajiBersihBulanIni < $this->target){
            $ts = 1;
            if($this->adjustCount == 0){
                if($this->pkp > 60000000) {
                    $ts = $this->amountPph21ThisMonth * 0.85;
                } else if($this->pkp > 250000000) {
                    $ts = $this->amountPph21ThisMonth * 0.75;
                } else if($this->pkp > 500000000) {
                    $ts = $this->amountPph21ThisMonth * (0.70);
                } else if($this->pkp > 5000000000) {
                    $ts = $this->amountPph21ThisMonth * 0.65;
                }else{
                    $ts = $this->amountPph21ThisMonth;
                }
                // $this->subsidyPph = 
            
            $pengali = 1;
            // if($this->amountPph21ThisMonth > 1000000) {
            //     $pengali = 100;
            // }else if($this->amountPph21ThisMonth > 5000000) {
            //     $pengali = 1000;
            // }else if($this->amountPph21ThisMonth > 10000000) {
            //     $pengali = 10000;
            // } else if($this->amountPph21ThisMonth > 10000000){
            //     // $pengali = 1000;
            // }
            // $this->subsidyPph += ($this->subsidyPph == 0) ? $this->amountPph21ThisMonth : $pengali;
            // die($ts);
                $this->adjustCount ++;
            }
            $this->subsidyPph += $ts;
            if($this->adjustCount == 2){
                // print_r($ts);
                // dd($this);
                // die;
            }
            $this->resolve($this->target);
        }
    }
}