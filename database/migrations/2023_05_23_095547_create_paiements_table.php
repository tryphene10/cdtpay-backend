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
        Schema::create('paiements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('eleve_id');
            $table->unsignedBigInteger('tranche_id');
            $table->unsignedBigInteger('paiement_method_id');
            $table->unsignedBigInteger('statut_paiement_id');
            $table->string('montant');
            $table->string('pay_phone');
            $table->string('ref')->nullable();
            $table->foreign('statut_paiement_id')->references('id')->on('statut_paiements');
            $table->foreign('paiement_method_id')->references('id')->on('paiement_method');
            $table->foreign('tranche_id')->references('id')->on('tranches');
            $table->foreign('eleve_id')->references('id')->on('eleves');
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
        Schema::dropIfExists('paiements');
    }
};
