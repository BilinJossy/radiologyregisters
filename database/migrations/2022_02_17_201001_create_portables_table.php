<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\studydetails;
use App\Models\register;
use App\Models\patient;

class CreatePortablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portables', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sid')->unsigned();
            $table->foreign('sid')->references('id')->on('studydetails');
            $table->date('last_menstural_period')->nullable()->default(NULL);
            $table->time('ot_in_time')->nullable()->default(NULL);
            $table->time('ot_out_time')->nullable()->default(NULL);
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
        Schema::dropIfExists('portables');
    }
}
