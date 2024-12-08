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
        Schema::create('benh_nhans', function (Blueprint $table) {
            $table->id();
            $table->string('can_cuoc_cong_dan')->unique();
            $table->string('bao_hiem_y_te')->unique();
            $table->string('ho_ten')->nullable();
            $table->date('ngay_sinh')->nullable();
            $table->float('can_nang')->nullable();
            $table->float('chieu_cao')->nullable();
            $table->string('so_dien_thoai')->unique();
            $table->string('dia_chi')->nullable();
            $table->boolean('gioi_tinh')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('benh_nhans');
    }
};
