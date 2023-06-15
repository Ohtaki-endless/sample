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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('name', 20);
            $table->string('name_romaji', 60);
            $table->string('face_picture_link')->nullable();
            $table->string('post', 50)->nullable();
            $table->string('tunag_link')->nullable();
            $table->string('times_link')->nullable();
            $table->text('free_space')->nullable();
            $table->enum('work_status', ['possible', 'impossible']);
            $table->boolean('is_admin');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
