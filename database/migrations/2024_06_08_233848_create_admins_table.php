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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('Prenom');
            $table->string('Username')->unique();
            $table->string('Password');
            $table->string('mail');
            $table->string('CIN')->unique();
            $table->string('Phone',10);
            $table->unsignedBigInteger('ID_Center')->unique();
            $table->enum('Status',['Active','In Active'])->default('In Active');
            $table->foreign('ID_Center')->references('id')->on('centers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
