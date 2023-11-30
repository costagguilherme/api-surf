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
        Schema::create('onda', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bateria_id');
            $table->unsignedBigInteger('surfista_id');

            $table->foreign('bateria_id')->references('id')->on('bateria');
            $table->foreign('surfista_id')->references('id')->on('surfista');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onda');
    }
};
