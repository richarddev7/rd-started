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
        Schema::create('app_user_profile', function (Blueprint $table) {
            $table->id(); // esta línea ya existía

            // Nuevos campos
            $table->string('level');
            $table->string('name_profile');
            $table->text('description_profile');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('level_user');
    }
};
