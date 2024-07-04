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
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('Role');
            $table->date('Date_Start');
            $table->string('CIN')->unique();
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Phone');
            $table->string('mail');
            $table->unsignedBigInteger('ID_Center');
            $table->timestamps();
            $table->foreign('ID_Center')->references('id')->on('centers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workers');
    }
};
