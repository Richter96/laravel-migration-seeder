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
            $table->string('Azienda', 100);
            $table->string('departure_station', 255);
            $table->string('arrival_station', 255);
            $table->string('arrival_hour');
            $table->string('departure_hour');
            $table->smallinteger('code_train');
            $table->smallInteger('number_cab');
            $table->boolean('train_delay')->default(false);
            $table->boolean('delated')->default(false);
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
