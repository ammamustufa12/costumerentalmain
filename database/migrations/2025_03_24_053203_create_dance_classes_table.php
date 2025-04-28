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
        Schema::create('dance_classes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id'); // Instructor user
            $table->unsignedBigInteger('dance_category_id'); // Dance category

            $table->string('name');          // Class name
            $table->string('instructor');    // Instructor name
            $table->timestamp('schedule');   // Class schedule
            $table->float('price');          // Class price
            $table->json('images')->nullable(); // <-- updated this

            $table->timestamps();

            // Foreign keys
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('dance_category_id')->references('id')->on('dancecategories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dance_classes');
    }
};
