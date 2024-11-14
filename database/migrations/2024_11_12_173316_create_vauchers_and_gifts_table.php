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
        Schema::create('vauchers_and_gifts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('vauchers_category_id');
            $table->longText('content')->nullable();
            $table->string('image')->nullable();
            $table->foreign('vauchers_category_id')->references('id')->on('vauchers_categories');
            $table->timestamps();
            $table->enum('text_position', ['Left', 'Right'])->default('Left');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vauchers_and_gifts');
    }
};
