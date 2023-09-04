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
        Schema::create('lot_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lot_id')->index();
            $table->foreignId('category_id')->index();
            $table->timestamps();

            $table->foreign('lot_id')
                  ->references('id')
                  ->on('lots')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();

            $table->unique(['lot_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lot_categories');
    }
};