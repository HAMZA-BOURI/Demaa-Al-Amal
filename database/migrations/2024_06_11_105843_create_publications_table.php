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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('Titre')->nullable();
            $table->string('Description');
            $table->char('Type_blood', 3);
            $table->string('location')->nullable();
            $table->enum('Status',['Active','In Active'])->default('Active');
            $table->String('UserName');
            $table->string('Ville');
            $table->date('Date_Public');
            $table->timestamps();
            $table->foreign('UserName')->references('UserName')->on('users');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
