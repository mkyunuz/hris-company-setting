<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    
    public function data(Request $request)
    {
        $model = Office::where("client_id", "c4a89e16-d85c-48c6-913c-fb1f8c709c93")->get();
        return response()->json([
            "error_code" => "SUCCESS",
            "error_message" => "ok",
            "payload" => $model,
        ]);
    }
}
