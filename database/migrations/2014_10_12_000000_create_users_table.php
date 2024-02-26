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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();

            // Nuevos campos
            $table->string('phone');
            $table->string('whatsapp');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('image')->nullable();
            $table->date('birthdate')->nullable();
            $table->text('about_me')->nullable();
            $table->string('level');
            $table->string('status');
            $table->string('token_active')->nullable();
            $table->string('token_api')->nullable();

            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
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
