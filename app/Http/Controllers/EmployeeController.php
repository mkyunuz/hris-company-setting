<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {

    }

    public function data(Request $request)
    {
        // Employee::
    }

    public function form(Request $request)
    {

        // $model = Employee::create([
        //     "employee_name" => $request->employee,
        //     "birth_date" => $request->gender,
        //     "address" => $request->address,
        //     "religion" => $request->religion,
        // ]);
        return view("employee-form");
    }

    public function store(Request $request)
    {
        // $table->string("employee_name", 150);
        //     $table->string("gender", 50);
        //     $table->date("birth_date")->nullable();
        //     $table->text("address");
        //     $table->string("religion", 35)->nullable();
        
        DB::beginTransaction();
        try{
            $model = Employee::create([
                "employee_name" => $request->employee_name,
                "gender" => $request->gender,
                "address" => $request->address,
                "religion" => $request->religion,
            ]);
            // 
            // class = 
            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
        }
        
    }
}
