<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\SettingController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix("setting")->group(function(){
    Route::get("/pph21", "SettingController@pph21");
    Route::get("/pph21/dummy", "SettingController@dummy");
    Route::get("/pph21/teams", "SettingController@teams")->name("teams");
    Route::get("/pph21/teams-member/{team?}", "SettingController@memberData")->name("team.member");
});

Route::name('company.')->group(function () {
    Route::prefix("company")->group(function(){
        Route::get("/create", "SettingController@createCompany");
        Route::get("/setting", "SettingController@index");
        Route::post("/payroll-setting", "SettingController@savePayrolSetting")->name("payroll.setting.save");
        Route::get("/payroll-setting-data", "SettingController@index")->name("payroll.setting.data");
        Route::get("/pph21-setting/{clientId}", "SettingController@pph21Setting")->name("pph21.setting");
        Route::get("/bpjs-data/{clientId}", "SettingController@bpjsData")->name("bpjs.setting");
    });
});
Route::get("tax-demo", "SettingController@taxdemo");
Route::prefix("office")->group(function(){
    Route::post("/form", "SettingController@createCompany");
});
Route::name('office.')->group(function () {
    Route::prefix("office")->group(function(){
        Route::get("/form", "OfficeController@form");
        Route::get("/data", "OfficeController@data")->name("data");
        Route::post("/form", "OfficeController@store")->name("store");
    });
});
Route::name('department.')->group(function () {
    Route::prefix("department")->group(function(){
        Route::get("/form", "DepartmentController@form");
        Route::post("/form", "DepartmentController@store")->name("store");
        Route::get("/data", "DepartmentController@data")->name("data");
    });
});
Route::name('position.')->group(function () {
    Route::prefix("position")->group(function(){
        Route::get("/data", "PositionController@data")->name("data");
        Route::get("/form", "PositionController@form");
        Route::post("/form", "PositionController@store")->name("store");
    });
});

Route::name('employee.')->group(function () {
    Route::prefix("employee")->group(function(){
        Route::get("/data", "EmployeeController@data")->name("data");
        Route::get("/form", "EmployeeController@form");
        Route::post("/form", "EmployeeController@store")->name("store");
    });
});
