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
        Schema::create('so_khams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_bac_si')->nullable();
            $table->string('can_cuoc_cong_dan')->unique();
            $table->string('bao_hiem_y_te')->unique();
            $table->date('ngay_kham_benh')->nullable();
            $table->string('trieu_chung_benh')->nullable();
            $table->string('chuan_doan')->nullable();
            $table->date('ngay_tai_kham')->nullable();
            $table->string('id_xet_nghiem')->unique();
            $table->unsignedBigInteger('id_don_thuoc')->nullable();
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('so_khams');
    }
};
