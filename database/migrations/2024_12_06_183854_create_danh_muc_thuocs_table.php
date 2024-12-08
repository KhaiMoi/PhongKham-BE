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
        Schema::create('danh_muc_thuocs', function (Blueprint $table) {
            $table->id();
            $table->string('id_thuoc')->unique();
            $table->string('ten_thuoc')->nullable();
            $table->string('chi_dinh')->nullable();
            $table->date('ngay_het_han')->nullable();
            $table->float('so_luong')->nullable();
            $table->string('gia_tien')->nullable();
            $table->string('loai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('danh_muc_thuocs');
    }
};
