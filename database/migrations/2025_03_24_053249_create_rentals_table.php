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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Who is renting
            $table->unsignedBigInteger('costume_id'); // Which costume
            $table->date('rental_date');
            $table->date('return_date');
            $table->integer('quantity')->default(1);
            $table->decimal('price', 10, 2); // Final price (can include tax, discount etc.)
            $table->string('status')->default('pending'); // pending, confirmed, cancelled, completed
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('costume_id')->references('id')->on('costumes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
