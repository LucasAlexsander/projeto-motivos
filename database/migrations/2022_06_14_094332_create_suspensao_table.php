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
        Schema::create('suspensao', function (Blueprint $table) {
            $table->id('id_suspensao');
            $table->string('codigo', 11);
            $table->string('nome', 255);
            $table->string('conc_final', 255);
            $table->string('prisma_sabi', 255);
            $table->string('reatnb_plenus', 255);
            $table->string('situacao', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suspensao');
    }
};
