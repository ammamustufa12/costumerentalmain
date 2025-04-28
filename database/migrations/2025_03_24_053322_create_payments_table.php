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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            
            // Foreign key to users table
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            
            // Payment amount
            $table->float('amount');
            
            // Payment date
            $table->date('payment_date');
            
            // Payment method (e.g., 'credit_card', 'paypal', 'bank_transfer')
            $table->string('payment_method');
            
            // Payment status (e.g., 'pending', 'completed', 'failed')
            $table->enum('status', ['pending', 'completed', 'failed']);
            
            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
