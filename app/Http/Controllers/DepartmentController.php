<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Office;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function index(Request $request)
    {

    }



    public function data(Request $request)
    {
        $model = Department::where("client_id", "c4a89e16-d85c-48c6-913c-fb1f8c709c93")->get();
        return response()->json([
            "error_code" => "SUCCESS",
            "error_message" => "ok",
            "payload" => $model,
        ]);
    }

    public function form(Request $request)
    {
        return view("department-form");
    }

    public function store(Request $request)
    {
        $clientId = "c4a89e16-d85c-48c6-913c-fb1f8c709c93";
        DB::beginTransaction();
        try{
            // $office = Office::where("id", "eb6bf393-a3d9-4b7c-9e87-0a792fc4d12c")->with("departments")->first();
            // dd($office);
            $departmentName = $request->department_name;
            $offices = $request->offices;
            $position = $request->position;
            $employee = $request->employee;

            // dd($request->all());
            $department = Department::create([
                "department_name" => $departmentName,
                "client_id" => $clientId,
            ]);

            $position = Position::create([
                "client_id" => $clientId,
                "position_name" => $position,
            ]);

            // $department
           
            $department->offices()->sync($offices);
            // dd($department->offices);
            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();
            echo $e->getMessage();

        }
    }
    

}
