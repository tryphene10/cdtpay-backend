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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('classe_id')->nullable();
            $table->unsignedBigInteger('annee_scolaire_id')->nullable();
            $table->unsignedBigInteger('statut_eleve_id')->nullable();
            $table->unsignedBigInteger('pension_id')->nullable();
            $table->string('name');
            $table->string('surname')->nullable();
            $table->string('birthday')->nullable();
            $table->string('sex')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('mother_phone')->nullable();
            $table->string('nationalite')->nullable();
            $table->string('photo')->nullable();
            $table->string('email')->unique();
            $table->string('ref')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('published')->default(1);
            $table->foreign('pension_id')->references('id')->on('pensions');
            $table->foreign('statut_eleve_id')->references('id')->on('statut_eleves');
            $table->foreign('annee_scolaire_id')->references('id')->on('annee_scoaires');
            $table->foreign('classe_id')->references('id')->on('classes');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
