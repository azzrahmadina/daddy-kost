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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->double('harga');
            $table->double('total_harga');
            $table->double('durasi');
            $table->date('tgl_masuk');
            
            $table->unsignedBigInteger('id_penghuni');
            $table->unsignedBigInteger('id_kamar');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            
            $table->foreign('id_penghuni')->references('id')->on('penghunis')->onDelete('cascade');
            $table->foreign('id_kamar')->references('id')->on('kamars')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
