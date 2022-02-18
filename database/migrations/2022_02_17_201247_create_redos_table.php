<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sid')->unsigned();
            $table->foreign('sid')->references('id')->on('studydetails');
            $table->string('error')->nullable()->default(NULL);
            $table->string('corrective_action')->nullable()->default(NULL);
            $table->string('corrected_by')->nullable()->default(NULL);
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
        Schema::dropIfExists('redos');
    }
}
