<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\studydetails;
use App\Models\register;
use App\Models\patient;

class CreateCtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sid')->unsigned();
            $table->foreign('sid')->references('id')->on('studydetails');
            $table->date('ct_last_menstural_period')->nullable()->default(NULL);
            $table->string('ct_weight');
            $table->string('ct_contrast');
            $table->string('ct_creatine');
            $table->string('ct_kV');
            $table->string('ct_mAs');
            $table->string('ct_dose');
            $table->String('ct_start_date');
            $table->String('ct_end_date');
            $table->String('ct_bill_date');
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
        Schema::dropIfExists('cts');
    }
}
