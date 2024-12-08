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
        Schema::create('don_thuocs', function (Blueprint $table) {
            $table->id();
            $table->string('id_don_thuoc')->unique();
            $table->string('toa_thuoc')->nullable();
            $table->date('ngay_ke_toa_thuoc')->nullable();
            $table->string('tong_chi_phi')->nullable();
            $table->unsignedBigInteger('id_thuoc')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_thuocs');
    }
};
