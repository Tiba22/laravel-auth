<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('cars', function (Blueprint $table) {
      $table->foreign('brand_id', 'brandId')->references('id')->on('brands');
    });

    Schema::table('car_pilot', function (Blueprint $table) {
      $table->foreign('car_id', 'carOfPilot')->references('id')->on('cars');
      $table->foreign('pilot_id', 'pilotOfCar')->references('id')->on('pilots');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::table('cars', function (Blueprint $table) {
      $table -> dropForeign('brandId');
    });

    Schema::table('car_pilot', function (Blueprint $table) {
      $table -> dropForeign('carOfPilot');
      $table -> dropForeign('pilotOfCar');
    });
  }
}
