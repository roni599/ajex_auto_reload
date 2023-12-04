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
        Schema::create('espdata', function (Blueprint $table) {
            $table->id();
            $table->string('AverageHeartRate');
            $table->string('SPO2');
            $table->string('BodyTemperature', 5, 2);
            $table->string('FallStatus');
            $table->string('EmergencyCall');
            $table->string('HealthStatus');
            $table->string('ActiveStatus');
            $table->timestamp('reading_time')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('espdata');
    }
};
