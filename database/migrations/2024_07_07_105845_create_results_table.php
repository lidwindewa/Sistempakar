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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Assuming you want to link results to a user
            $table->unsignedBigInteger('question_id'); // Link to the question
            $table->enum('answer', ['Tidak Pernah', 'Jarang', 'Sering', 'Selalu']); // The answer given
            $table->unsignedTinyInteger('points'); // Points for the answer
            $table->unsignedTinyInteger('points_A01')->nullable(); // Points for code A01
            $table->unsignedTinyInteger('points_A02')->nullable(); // Points for code A02
            $table->unsignedTinyInteger('points_A03')->nullable(); // Points for code A03
            $table->timestamps();
    
            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
