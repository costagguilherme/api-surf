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
        Schema::create('bateria', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('surfista_1_id');
            $table->unsignedBigInteger('surfista_2_id');

            $table->foreign('surfista_1_id')->references('id')->on('surfista');
            $table->foreign('surfista_2_id')->references('id')->on('surfista');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bateria');
    }
};
