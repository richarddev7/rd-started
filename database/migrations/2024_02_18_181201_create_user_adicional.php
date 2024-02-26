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
        Schema::create('app_user_adicional', function (Blueprint $table) {
            $table->integer('id_user_adicional');
            $table->string('image_banner')->nullable();
            $table->integer('dark_mode')->default(0);
            $table->string('language')->default('es');
            $table->string('web_page')->nullable();
            $table->string('social_facebook')->nullable();
            $table->string('social_instagram')->nullable();
            $table->string('social_youtube')->nullable();
            $table->string('social_x')->nullable();
            $table->string('field_adicional1')->nullable();
            $table->string('field_adicional2')->nullable();
            $table->string('field_adicional3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_user_adicional');
    }
};
