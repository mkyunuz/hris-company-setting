<?php
namespace App\Repositories;

use App\Models\Bpjs;
use App\Models\ClientSetting;
use App\Models\Pph21;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class BpjsRepository {

    private $bpjsKSGorup = "KS";
    private $bpjsKSCode = "BPJSKS";
    private $clientSetting = null;

    private $bpjsGroupCode = "TK";
    private $bpjsTKCode = [
        "JHT" => "Jaminan Hari Tua",
        "JKK" => "Jaminan Kecelakaan Kerja",
        "JKM" => "Jaminan Kematian",
        "JP" => "Jaminan Pensiun",
    ];
    public function __construct(ClientSetting $clientSetting)
    {
        $this->clientSetting = $clientSetting;
    }

    public function getBpjsksData()
    {
        $model = Bpjs::where([
            "client_id" => $this->clientSetting->client_id, 
            "bpjs_def" => "KS",
            ])->first();
        return $model;
    }

    public function getBpjstkData()
    {
        $model = Bpjs::where([
            "client_id" => $this->clientSetting->client_id, 
            "code" => "BPJSTK",
            ])->get();
        return [
            "jht" => $model->firstWhere('bpjs_def', 'JHT'),
            "jkm" => $model->firstWhere('bpjs_def', 'JKM'),
            "jkk" => $model->firstWhere('bpjs_def', 'JKK'),
            "jp" => $model->firstWhere('bpjs_def', 'JP'),
        ];
    }

    public function updateBpjsks(Request $request)
    {
        $model = Bpjs::where([
                        "client_id" => $this->clientSetting->client_id, 
                        "bpjs_def" => "KS",
                        ])->first();
        $this->createOrupdateModel($this->scopeBpjsKs($request), $model ?? new Bpjs());
    }


    public function createOrupdateModel($params, Bpjs $model)
    {
        return !$model->client_id ? Bpjs::create($params) : $model->update($params);
    }

    

    public function updateBpjstk(Request $request)
    {
        foreach($this->bpjsTKCode as $key => $val) {
          
            $model = Bpjs::where([
                "client_id" => $this->clientSetting->client_id, 
                "bpjs_def" => $key,
                "code" => "BPJSTK",
                ])->first();
            $this->createOrupdateModel($this->scopeBpjstk($request, $key), $model ?? new Bpjs());
        }
        
    }

    private function scopeBpjstk(Request $request, $group)
    {
        $result["client_id"] = $this->clientSetting->client_id;
        $result["code"] = "BPJSTK";
        $result["name"] = Arr::get($this->bpjsTKCode, $group);
        $result["bpjs_def"] = $group;
        $result["maximum_salary"] = 0;
        switch($group)
        {
            case "JHT" :
                $result["corporate_responsibility"] = $request->corporate_jht ?? 0;
                $result["employee_responsibility"] = $request->employee_jht ?? 0;
            break;
            case "JKK" :
                $result["corporate_responsibility"] = $request->corporate_jkk ?? 0;
                $result["employee_responsibility"] = $request->employee_jkk ?? 0;
            break;
            case "JKM" :
                $result["corporate_responsibility"] = $request->corporate_jkm ?? 0;
                $result["employee_responsibility"] = $request->employee_jkm ?? 0;
            break;
            case "JP" :
                $result["corporate_responsibility"] = $request->corporate_jp ?? 0;
                $result["employee_responsibility"] = $request->employee_jp ?? 0;
                $result["maximum_salary"] = $request->maximum_salary ?? 0;
            break;
            default:
            break;
                    
        }

        return $result;
    }

    private function scopeBpjsKs(Request $request)
    {
        return [
            "client_id" => $this->clientSetting->client_id,
            "code" => $this->bpjsKSCode,
            "name" => "Bpjs Kesehatan",
            "bpjs_def" => $this->bpjsKSGorup,
            "corporate_responsibility" => $request->corporate_responsibility_bpjsks ?? 0,
            "employee_responsibility" => $request->employee_responsibility_bpjsks ?? 0,
            "maximum_salary" => $request->salary_max_bpjsks ?? 0,
        ];
    } 
    

}