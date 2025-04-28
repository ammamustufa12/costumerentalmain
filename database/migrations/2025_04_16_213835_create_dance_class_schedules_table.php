<?php

// database/migrations/xxxx_xx_xx_create_dance_class_schedules_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('dance_class_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dance_class_id');
            $table->string('day'); // Monday, Tuesday, etc.
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();

            $table->foreign('dance_class_id')->references('id')->on('dance_classes')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dance_class_schedules');
    }
};
