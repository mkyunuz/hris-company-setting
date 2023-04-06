<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PositionController extends Controller
{

    public function index(Request $request)
    {

    }

    public function form(Request $request)
    {
        return view("position-form");
    }


    public function data(Request $request)
    {
        $model = Position::where("client_id", "c4a89e16-d85c-48c6-913c-fb1f8c709c93")->get();
        return response()->json([
            "error_code" => "SUCCESS",
            "error_message" => "ok",
            "payload" => $model,
        ]);
    }

    public function store(Request $request)
    {
        $clientId = "c4a89e16-d85c-48c6-913c-fb1f8c709c93";
        DB::beginTransaction();
        try{
            $departmentId = $request->department_id;
            $positionName = $request->position_name;
            $employee = $request->employee;

            
            $department = Position::create([
                "position_name" => $positionName,
                "department_id" => $departmentId,
                "client_id" => $clientId,
            ]);

           
            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();
            echo $e->getMessage();

        }
    }
    
}
