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
        Schema::create('bac_sis', function (Blueprint $table) {
            $table->id();
            $table->string('id_bac_si')->unique();
            $table->string('ten_bac_si')->nullable();
            $table->date('ngay_sinh')->nullable();
            $table->boolean('gioi_tinh')->nullable();
            $table->string('so_dien_thoai')->unique();
            $table->string('hash_reset')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bac_sis');
    }
};
