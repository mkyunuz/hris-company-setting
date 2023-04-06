<?php

namespace App\Http\Controllers;

use App\Builder\SolveGoalSeek;
use App\Builder\TaxBuilder;
use App\Models\Client;
use App\Models\ClientSetting;
use App\Models\Department;
use App\Models\Position;
use App\Models\Pph21;
use App\Repositories\BpjsRepository;
use App\Repositories\ClientSettingRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SettingController extends Controller
{
   
    protected $staticClientId = "c4a89e16-d85c-48c6-913c-fb1f8c709c93";
    public function pph21(Request $request) {
        // return view("setting.pph21");
        return view("setting.pbaqtemplate");

    }

    public function dummy(Request $request) {
        $teams =  $this->division();
        $formattedData = [];
        foreach($teams as $key => $val){
            $formattedData = $val;
        }
        $response["payload"] = $teams;
        $response["formattedData"] = $formattedData;
        return response()->json($response);
    }

    private function member(){
        $members = [
            ["id" => "00001", "name" => "Jhon Xena", "id_team" => "marketing"],
            ["id" => "00002", "name" => "Jaka Saragih", "id_team" => "marketing"],
            ["id" => "00003", "name" => "Dedi Cahyadi", "id_team" => "operation"],
            ["id" => "00004", "name" => "Sena Winata", "id_team" => "marketing"],
            ["id" => "00005", "name" => "Agus Setiyadi", "id_team" => "marketing"],
            ["id" => "00006", "name" => "Darwin Rian", "id_team" => "it"],
            ["id" => "00007", "name" => "Damar Angkasa", "id_team" => "operation"],
            ["id" => "00008", "name" => "Mika Iswati", "id_team" => "it"],
            ["id" => "00009", "name" => "Selena Endang", "id_team" => "it"],
            ["id" => "000010", "name" => "Kswadi", "id_team" => "marketing"],
            ["id" => "000011", "name" => "Andika Dan", "id_team" => "operation"],
            ["id" => "000012", "name" => "Deni Waryawan", "id_team" => "operation"],
            ["id" => "000013", "name" => "Gama Kiu", "id_team" => "marketing"],
            ["id" => "000014", "name" => "Nando Sitama", "id_team" => "it"],
            ["id" => "000015", "name" => "Surya Palawija", "id_team" => "operation"],
            ["id" => "000016", "name" => "Riyadi Sulaiman", "id_team" => "operation"],
            ["id" => "000017", "name" => "Mohamad Dhika", "id_team" => "operation"],
            ["id" => "000018", "name" => "Dina Martinaning", "id_team" => "operation"],
            ["id" => "000019", "name" => "Permata Julia", "id_team" => "operation"],
            ["id" => "000020", "name" => "Riyan Aman", "id_team" => "marketing"],
        ];
        return $members;
    }

    public function memberData(Request $request, $teamId = null)
    {
        $members = $this->member();
        $filtered = Arr::where($members, function ($value, $key) use($teamId, &$members) {
            if($value["id_team"] == $teamId) {
                unset($members[$key]);
            }
            return $value["id_team"] == $teamId;
        });
        $a = array_values($filtered);
        $response["payload"] = $a;
        return response()->json($response);
    }

    public function teams(Request $request)
    {
        $teams =  $this->division();
        $formattedData = [];
        $members = $this->member();
        foreach($teams as $index => $val){
            $formattedData[$index] = $val;
            $filtered = Arr::where($members, function ($value, $key) use($val, &$members) {
                if($value["id_team"] == $val["id"]) {
                    unset($members[$key]);
                }
                return $value["id_team"] == $val["id"];
            });
            $formattedData[$index]["teams"] = $filtered;
        }
        $response["payload"] = $teams;
        $response["formattedData"] = $formattedData;
        return response()->json($response);
        // return response()->json($response);
    }



    private function division()
    {
        return [
            ["id"=> "master", "name" => "Master", "approver" => "Master User", "approver_code" => null, "members_url" => route('team.member', ["team" => "master"])],
            ["id"=> "marketing", "name" => "Marketing", "approver" => "Sandika", "approver_code" => "SDKI", "members_url" => route('team.member', ["team" => "marketing"])],
            ["id"=> "it", "name" => "IT", "approver" => "Galih", "approver_code" => "GLHI", "members_url" => route('team.member', ["team" => "it"])],
            ["id"=> "operation", "name" => "Operations", "approver" => "Sintya", "approver_code" => "STY", "members_url" => route('team.member', ["team" => "operation"])],
        ];
    }


    public function createCompany(Request $request)
    {
        
        DB::beginTransaction();
        try{
            $client = Client::create([
                "company_name" => "PT Cemerlang",
                "company_address" => "Jakarta",
                "company_phone" => "0123",
                "company_email" => "asda@mail.com",
            ]);

            $offices = $client->offices()->createMany([[
                "office_name" => "Head Office",
                "is_main_office" => 1,
                "address" => "Jakarta Pusat",
            ], [
                "office_name" => "Bandung",
                "is_main_office" => 0,
                "address" => "Bandung",
            ]]);

        
            $office = $offices->first();

            // $departments = $office->departments()->createMany([
            //     [
            //         "client_id" =>$client->id,
            //         "department_name" => "Finance"
            //     ]
            // ]);
            // $dept = $departments->first();
            // $positions = $dept->positions()->createMany([
            //     [
            //         "client_id" => $client->id,
            //         "position_name" => "Head Of Finance",
            //     ]
            // ]);
            $positions = Position::create([
                "client_id" => $client->id,
                "position_name" => "CEO",
            ]);

            DB::commit();
            dd([
                $client->toArray(),
                $offices->toArray(),
                // $departments->toArray(),
                $positions->toArray(),
            ]);
        } catch(\Exception $e) {
            echo $e->getMessage();
            Log::error($e->getMessage());
        }
        
    }


    ## HRIS
    public function index(Request $request) {

        $model = Client::where("id", $this->staticClientId)->firstOrFail();
        $clientSetting = $model->setting;
        return view("company-setting-index", [
            "pph21SettingUrl" => route("company.pph21.setting", $this->staticClientId),
            "bpjsSettingUrl" => route("company.bpjs.setting", $this->staticClientId),
            "clientSetting" => $clientSetting
        ]);
    }


    public function pph21Setting(Request $request, $clientId)
    {
        $model = Pph21::find($clientId)->first();
        return response()->json([
            "error_code" => "SUCCESS",
            "error_message" => "OK",
            "payload" => $model,
        ]);
    }

    public function bpjsData(Request $request, $clientId)
    {
        $model = Client::where("id", $this->staticClientId)->first();
        $clientSetting = $model->setting;
        $repo = new BpjsRepository($clientSetting);
        $bpjsKs = $repo->getBpjsksData();
        $bpjsTk = $repo->getBpjstkData();
        
        return response()->json([
            "error_code" => "SUCCESS",
            "error_message" => "ok",
            "payload" => [
                "bpjsks" => $bpjsKs,
                "bpjstk" => $bpjsTk,
            ]
        ]);
    }

    public function savePayrolSetting(Request $request)
    {
        DB::beginTransaction();
        try{
            $clientSetting = ClientSetting::where("client_id", $this->staticClientId)->first();
            $repo = new  ClientSettingRepository($clientSetting);
            $repo->updateGeneralSetting($request);
            $repo->savePph21($request);
            $repo->saveBpjsKs($request);
            $repo->saveBpjsTk($request);
            DB::commit();
        } catch(\Exception $e){
            DB::rollBack();
            echo $e->getMessage(). " on Line ".$e->getMessage();
        }
        // $enablePph21 = $request->enable_pph21;
        // $npwpCompanyName = $request->npwp_company_name;
        // $npwpCompanyNumber = $request->npwp_company_number;
        // $nppwpOwnerName = $request->nppwp_owner_name;
        // $nppwpOwnerNumber = $request->nppwp_owner_number;

        // $enableBpjsks = $request->enable_bpjsks;
        // $corporateResponsibilityBpjsks = $request->corporate_responsibility_bpjsks;
        // $employeeResponsibilityBpjsks = $request->employee_responsibility_bpjsks;
        
        // $enableBpjstk = $request->enable_bpjstk;
        // $corporateJht = $request->corporate_jht;
        // $employeeJht = $request->employee_jht;
        // $maximumValueJht = $request->maximum_value_jht;

        // $corporateJkk = $request->corporate_jkk;
        // $employeeJkk = $request->employee_jkk;
        // $maximumValueJkk = $request->maximum_value_jkk;

        // $corporateJkm = $request->corporate_jkm;
        // $employeeJkm = $request->employee_jkm;
        // $maximumValueJkm = $request->maximum_value_jkm;

        // $corporateJp = $request->corporate_jp;
        // $employeeJp = $request->employee_jp;
        // $maximumValueJp = $request->maximum_value_jp;

        // dd($request->all());
    }

    public function payrolSettingData(Request $request)
    {
        
    }

    private function getResponse($i)
    {
        $x = [false, false, false, false, false, false];
        // dd($x[$i]);
        // print_r($x[$i]);
        return $x[$i];
    }

    private function roundDown($number, $x){
        $b = $number % $x;
        if($b != 0) {
            $number -= $b;
        }

        return $number;
    }


    public function taxDemo()
    {
        

    //     $time_start = microtime(true); 
    //    for ($i=0; $i<=50000000; $i++){
    //         $x = 1000312*100/100+100;
    //    }
        
    //    echo 'Total execution time in seconds: ' . (microtime(true) - $time_start);
    //    die;
        
        // $xx = 1400034901;
        // $this->roundDown($xx, 1000);
        $tax = new TaxBuilder();
        $tax->setStatusPajak("TK/0");
        $goal = 10000000;
        $tax->setBasicSalary($goal);
        // $tax->setFixedAllowanceAndOther(2000000);
        dd($tax->resolve($goal));
        die;


        $tarifs = [5, 15, 25, 30, 35];
        $lapis = [5000000000, 500000000, 250000000,60000000, 0];
        // $numb = 584160000;
        // $numb = 540000000;
        $numb = 324000000;
        $filterd = array_filter($lapis, function($item) use($numb){
            return $item <= $numb;
        });
        $x = array_reverse($filterd);
        // print_r($x);
        // die;
        $dec = $numb;
        $rv = count($filterd) - 1;
        // print_r($rv);
        $taxs=0;
        foreach($filterd as $a => $b){
            $object = $dec-$b;
            echo $object. " => ".$tarifs[$rv]. "<br/>" ;
            $taxs += $object * ($tarifs[$rv] / 100);
            // echo $taxs. "<br/>" ;
            $dec = $b;
            $rv--;
        }
        echo $taxs;
        die;
        dd($tax->resolve());
        $goalSeek = new SolveGoalSeek();

        
        // $getValue = 0;
        // $getValue = $goalSeek->seekGoal(
        //     function($value, $data){
        //         return sqrt($value);
        //     },
        //     $tax->amountPph21ThisMonth,  // The Actual Value
        //     10000000   // The Goal Value
        // );
        // Log::info($getValue);
    }


    private function taxAmount($yIncome = 0){
        $edgeIncome = [60000000,250000000,500000000,5000000000]; // Level Penghasilan Kena Pajak 
        $taxRate = [5,15,25,30];								// Rate Pajak Penghasilan
        $incomeTax = 0; 										// Pajak Penghasilan
        $tmpAdjust = 0; 										// temporary hasil penyesuaian
        foreach ($edgeIncome as $key => $value) {
            if($yIncome >= $tmpAdjust){
                
                if($yIncome >= $value){
                    if($key == 0){
                        $calRate = $value * ($taxRate[$key]/100);
                        $tmpAdjust = $tmpAdjust + $value;
                    }
                    elseif($key == (count($edgeIncome)-1)){
                        $left = $yIncome - $value;
                        $calRate = $left * ($taxRate[$key]/100);
                        $tmpAdjust = $tmpAdjust + $value;	
                    }
                    else{
                        $calRate = ($value-$edgeIncome[$key-1]) * ($taxRate[$key]/100);
                        $tmpAdjust = $tmpAdjust + ($value-$edgeIncome[$key-1]);
                    }
                }
                else{
                    if($key == 0){
                        $calRate = 0;
                        $tmpAdjust = $yIncome;
                    }
                    else{ 
                        
                        $left = $yIncome - $tmpAdjust;
                        $calRate = $left * ($taxRate[$key]/100);
                        $tmpAdjust = $tmpAdjust + $left;
                    }
                }
                $incomeTax = $incomeTax + $calRate;
                
            }
            
        }
        return $incomeTax;
    }
}
