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
        Schema::create('table_nota', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('onda_id');
            $table->foreign('onda_id')->references('id')->on('onda');
            $table->decimal('nota_parcial_1');
            $table->decimal('nota_parcial_2');
            $table->decimal('nota_parcial_3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_nota');
    }
};
