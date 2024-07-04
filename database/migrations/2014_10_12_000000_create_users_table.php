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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Prenom');
            $table->string('mail');
            $table->string('Adresse');
            $table->string('CIN')->unique();
            $table->string('UserName')->unique();
            $table->string('Phone',10);
            $table->string('password');
            $table->char('Type_Blood', 3);
            $table->unsignedBigInteger('ID_Donor');
            $table->string('Sex');
            $table->foreign('ID_Donor')->references('id')->on('donors');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
