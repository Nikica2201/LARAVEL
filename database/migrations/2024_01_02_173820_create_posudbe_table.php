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
        Schema::create('posudbe', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("clan_id");
            $table->unsignedBigInteger("knjiga_id");
            $table->date("datum_posudbe");
            $table->date("datum_povrata");
            $table->timestamps();

            $table->foreign('knjiga_id')->references('id')->on('knjige')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('clan_id')->references('id')->on('clanovi')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posudbe');
    }
};
