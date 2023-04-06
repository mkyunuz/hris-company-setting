<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterBpjsTablesAlterMaxResponsibility extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bpjs', function (Blueprint $table) {
            $table->dropColumn(["maximum_responsibility", "bpjs_group"]);
            $table->float("maximum_salary", 18,2)->default(0)->after("employee_responsibility");
            $table->string("bpjs_def", 10)->after("name");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bpjs', function (Blueprint $table) {
            $table->dropColumn(["maximum_salary", "bpjs_def"]);
            $table->float('maximum_responsibility', 18,2)->default(0)->after("employee_responsibility");
            $table->string('bpjs_group', 10)->after("name");
        });
    }
}
