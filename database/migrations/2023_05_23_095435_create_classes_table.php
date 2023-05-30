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
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cycle_id');
            $table->unsignedBigInteger('type_dossier_id')->nullable();
            $table->unsignedBigInteger('pension_id')->nullable();
            $table->string('designation');
            $table->string('description');
            $table->string('effectif')->nullable();
            $table->string('total_pension')->nullable();
            $table->boolean('published')->default(1);
            $table->string('ref')->nullable();
            $table->foreign('pension_id')->references('id')->on('pensions');
            $table->foreign('type_dossier_id')->references('id')->on('type_dossiers');
            $table->foreign('cycle_id')->references('id')->on('cycles');
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
        Schema::dropIfExists('classes');
    }
};
