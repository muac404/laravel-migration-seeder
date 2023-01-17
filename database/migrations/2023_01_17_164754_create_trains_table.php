<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("company",35)->nullable();
            $table->string("departure_station",50);
            $table->string("arrive_station",50);
            $table->time("departure_hour")->nullable();
            $table->time("arrive_hour")->nullable();
            $table->unsignedTinyInteger("train_id")->nullable;
            $table->unsignedTinyInteger("numero_carrozze");
            $table->boolean("is_delay")->nullable();
            $table->boolean("is_cancelled");
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
        Schema::dropIfExists('trains');
    }
};
