<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airlines', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("prefix", 2);
            $table->string("icao_callsign", 3);
            $table->string("atc_callsign");
            $table->boolean('unit_is_lbs')->default(false);
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
        Schema::dropIfExists('airlines');
    }
}
