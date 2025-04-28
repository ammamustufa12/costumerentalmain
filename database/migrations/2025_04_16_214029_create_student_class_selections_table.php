<?php

// database/migrations/xxxx_xx_xx_create_student_class_selections_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('student_class_selections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // student
            $table->unsignedBigInteger('dance_class_id');
            $table->unsignedBigInteger('schedule_id_1');
            $table->unsignedBigInteger('schedule_id_2');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('dance_class_id')->references('id')->on('dance_classes')->onDelete('cascade');
            $table->foreign('schedule_id_1')->references('id')->on('dance_class_schedules')->onDelete('cascade');
            $table->foreign('schedule_id_2')->references('id')->on('dance_class_schedules')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('student_class_selections');
    }
};
