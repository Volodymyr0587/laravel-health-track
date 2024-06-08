<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('health_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->date('date_of_birth')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->string('blood_group')->nullable();
            $table->integer('pulse')->nullable();
            $table->integer('blood_pressure_systolic')->nullable();
            $table->integer('blood_pressure_diastolic')->nullable();
            $table->string('allergies')->nullable();
            $table->string('chronic_diseases')->nullable();
            $table->string('surgical_interventions')->nullable();
            $table->integer('cigarettes_per_day')->nullable();
            $table->float('alcohol_beer_per_week')->nullable();
            $table->float('alcohol_wine_per_week')->nullable();
            $table->float('alcohol_spirits_per_week')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_profiles');
    }
};
