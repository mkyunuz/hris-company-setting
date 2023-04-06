<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePph21sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pph21s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid("client_id");
            $table->string("npwp_company_name", 100)->nullable();
            $table->string("npwp_company_number", 32)->nullable();
            $table->string("nppwp_owner_name", 32)->nullable();
            $table->string("npwp_owner_number", 100)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pph21s');
    }
}
