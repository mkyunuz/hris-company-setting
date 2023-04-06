<?php
namespace App\Repositories;

use App\Models\ClientSetting;
use App\Models\Pph21;
use Illuminate\Http\Request;

class ClientSettingRepository {

    private $clientSetting = null;
    public function __construct(ClientSetting $clientSetting)
    {
        $this->clientSetting = $clientSetting;
    }


    public function updateGeneralSetting(Request $request)
    {
        $this->clientSetting->update([
            "enable_pph21" => $request->enable_pph21,
            "enable_bpjstk" => $request->enable_bpjstk,
            "enable_bpjsks" => $request->enable_bpjsks,
        ]);

    }

    public function savePph21(Request $request)
    {
        $pph21model = Pph21::where("client_id", $this->clientSetting->client_id)->first();
        $this->updatePph21($this->scopePph21RequestParams($request), $pph21model ?? new Pph21());
    }

    private function scopePph21RequestParams(Request $request)
    {
        return [
            "client_id" => $this->clientSetting->client_id,
            "npwp_company_name" => $this->clientSetting->enable_pph21 ? $request->npwp_company_name : NULL,
            "npwp_company_number" => $this->clientSetting->enable_pph21 ? $request->npwp_company_number : NULL,
            "nppwp_owner_name" => $this->clientSetting->enable_pph21 ? $request->nppwp_owner_name : NULL,
            "npwp_owner_number" => $this->clientSetting->enable_pph21 ? $request->npwp_owner_number : NULL,
        ];
    }

    private function updatePph21($params, Pph21 $model)
    {
        return !$model->client_id ? Pph21::create($params) : $model->update($params);
    }

    public function saveBpjsKs(Request $request)
    {
        $repo = new BpjsRepository($this->clientSetting);
        $repo->updateBpjsks($request);
    }

    public function saveBpjsTk(Request $request)
    {
        $repo = new BpjsRepository($this->clientSetting);
        $repo->updateBpjstk($request);
    }

}