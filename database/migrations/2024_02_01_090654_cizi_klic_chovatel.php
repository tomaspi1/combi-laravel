<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('zvire', function (Blueprint $table) {
            $table->unsignedBigInteger('chovatel_id');
         
            //toto vytvori cizi klic a da mu toto vygenerovane jmeno: zvire_chovatel_id_foreign
            $table->foreign('chovatel_id')->references('id')->on('chovatel');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //toto odstrani cizi klic, ale data a sloupeck furt zustavaji
        Schema::table('zvire', function (Blueprint $table) {
            //zde rikame ze chceme smazat cizi klic s timto jmenem
            $table->dropForeign('zvire_chovatel_id_foreign');
        });
    }
};
