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
        Schema::create('tranches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('intitule_tranche_id');
            $table->unsignedBigInteger('pension_id');
            $table->unsignedBigInteger('cycle_id');
            $table->string('montant')->nullable();
            $table->string('ref_eleve')->nullable();
            $table->string('avance')->nullable();
            $table->string('reste')->nullable();
            $table->boolean('published')->default(1);
            $table->string('ref')->nullable();
            $table->foreign('cycle_id')->references('id')->on('cycles');
            $table->foreign('pension_id')->references('id')->on('pensions');
            $table->foreign('intitule_tranche_id')->references('id')->on('intitule_tranches');
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
        Schema::dropIfExists('tranches');
    }
};
