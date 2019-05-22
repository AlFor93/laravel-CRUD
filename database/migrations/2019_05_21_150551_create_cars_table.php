<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand');
            $table->string('model');
            $table->integer('price_in_euro');
            $table->integer('power');
            $table->integer('hp');
            $table->timestamps();
        });

        DB::table('cars')->insert([
          "brand" => "AlfaRomeo",
          "model" => "Mito",
          "price_in_euro" => 16500,
          "power" => 1600,
          "hp" => 120
        ]);

        DB::table('cars')->insert([
          "brand" => "Ford",
          "model" => "Fiesta",
          "price_in_euro" => 13500,
          "power" => 1400,
          "hp" => 98
        ]);

        DB::table('cars')->insert([
          "brand" => "Fiat",
          "model" => "Punto",
          "price_in_euro" => 11178,
          "power" => 1200,
          "hp" => 78
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
