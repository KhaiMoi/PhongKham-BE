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
        Schema::create('xet_nghiems', function (Blueprint $table) {
            $table->id();
            $table->string('id_xet_nghiem')->unique();
            $table->string('loai_xet_nghiem')->nullable();
            $table->date('ngay_xet_nghiem')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('xet_nghiems');
    }
};
