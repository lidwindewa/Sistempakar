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
        Schema::create('answer', function (Blueprint $table) {
                    $table->id(); // Primary Key
                    $table->unsignedBigInteger('question_id'); // Foreign Key, referring to 'questions' table
                    $table->unsignedBigInteger('user_id'); // Foreign Key, referring to 'users' table
                    $table->enum('answer', ['Tidak Pernah', 'Jarang', 'Sering', 'Selalu']);
                    $table->unsignedTinyInteger('points');
                    $table->timestamps(); // Automatically creates 'created_at' and 'updated_at' columns
        
                    // Foreign key constraints
                    $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
                    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer');
    }
};
