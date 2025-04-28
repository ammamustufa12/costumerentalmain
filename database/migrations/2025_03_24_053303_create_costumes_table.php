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
        Schema::create('costumes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
        
            $table->json('images')->nullable(); // Store multiple images as JSON
            $table->string('brand')->nullable();
        
            $table->float('weight');
            $table->string('unit')->default('gm'); // gm / kg
        
            $table->string('gender');
        
            $table->text('description')->nullable();
            $table->string('tag_number')->nullable();
            $table->integer('stock');
        
            $table->json('tags')->nullable(); // e.g., ["fashion", "watches"]
        
            $table->decimal('price', 10, 2);
            $table->decimal('discount', 5, 2)->nullable();
            $table->decimal('tax', 5, 2)->nullable();
            $table->decimal('total_price', 10, 2)->nullable();
        
            $table->json('color_size')->nullable(); 
            /**
             * Format:
             * {
             *   "red": ["M", "S"],
             *   "black": ["L"],
             *   "green": ["XL", "S"]
             * }
             */
        
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costumes');
    }
};
