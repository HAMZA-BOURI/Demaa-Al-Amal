<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->char('Type_Blood', 3);
            $table->string('name');
            $table->string('Prenom');
            $table->string('mail');
            $table->string('Adresse');
            $table->string('CIN')->unique();
            $table->unsignedBigInteger('ID_Center');
            $table->foreign('ID_Center')->references('id')->on('centers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donors');
    }
};
