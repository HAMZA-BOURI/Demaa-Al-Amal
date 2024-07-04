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
        Schema::create('dones', function (Blueprint $table) {
            $table->id();
            $table->integer('qte');
            $table->date('Date_D');
            $table->unsignedBigInteger('ID_Center');
            $table->unsignedBigInteger('ID_Donor');
            $table->foreign('ID_Center')->references('id')->on('centers');
            $table->foreign('ID_Donor')->references('id')->on('donors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dones');
    }
};
