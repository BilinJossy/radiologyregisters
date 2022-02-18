<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\studydetails;
use App\Models\register;
use App\Models\patient;

class CreateStudydetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studydetails', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pid')->unsigned();
            $table->foreign('pid')->references('id')->on('patients');
            $table->String('technician_name');
            $table->String('investigation');
            $table->string('modality');
            $table->String('visit_type');
            $table->String('remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studydetails');
    }
}
