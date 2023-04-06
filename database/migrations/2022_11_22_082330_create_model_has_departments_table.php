<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelHasDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_has_departments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid("department_id")->comment("id model departement");
            $table->uuid("model_id")->comment("fk model id ");
            $table->text("model_type")->comment("fk model id. ex : Positions");
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
        Schema::dropIfExists('model_has_departments');
    }
}
