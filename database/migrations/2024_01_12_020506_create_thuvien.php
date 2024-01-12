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
    Schema::create('thuvien', function (Blueprint $table) {
    $table->id();
    $table->string('ten_sach');
    $table->string('ISBN')->unique();
    $table->string('tac_gia');
    $table->string('the_loai');
    $table->unsignedInteger('so_trang');
    $table->unsignedInteger('nam_xb');
    $table->timestamps();
    });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thuvien');
    }
};
