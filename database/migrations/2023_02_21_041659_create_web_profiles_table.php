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
        Schema::create('web_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id');
            $table->foreign('news_id')
            ->references('id')
            ->on('desa_news')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->string('gambar1');
            $table->string('gambar2');
            $table->string('gambar3');
            $table->string('visi');
            $table->string('misi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_profiles');
    }
};
