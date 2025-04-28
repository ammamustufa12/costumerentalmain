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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            // Foreign key to users table
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            
            // Appointment date
            $table->date('appointment_date');
            
            // Purpose of the appointment
            $table->string('purpose');
            
            // Status of the appointment (e.g., 'pending', 'confirmed', 'completed')
            $table->enum('status', ['pending', 'confirmed', 'completed']);
            
            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
