<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBpjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bpjs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('client_id', );
            $table->string('code', 15);
            $table->string('name', 150);
            $table->string('bpjs_group', 2);
            $table->float('corporate_responsibility')->default(0);
            $table->float('employee_responsibility')->default(0);
            $table->float('maximum_responsibility')->default(0);
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
        Schema::dropIfExists('bpjs');
    }
}
