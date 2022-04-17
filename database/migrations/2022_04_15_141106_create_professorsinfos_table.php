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
        Schema::create('professorsinfos', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('photo')->nullable();
            $table->string('cin')->nullable();
            $table->string('drpp')->nullable();
            $table->string('date_recrutement')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->unique();
            $table->string('date_naissance')->nullable();
            $table->string('specialite')->nullable();
            $table->string('structure')->nullable();
            $table->string('directeur')->nullable();
            $table->string('dossierA')->nullable();
            $table->string('dossierP')->nullable();
            $table->string('dossierS')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('professorsinfos');
    }
};
