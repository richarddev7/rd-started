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
        if (! Schema::hasTable('app_post')) {
            Schema::create('app_post', function (Blueprint $table) {
                $table->integer('id_post')->autoIncrement();
                $table->string('title_post', 300);
                $table->string('slug_post', 200)->unique();
                $table->string('type_post', 30);
                $table->longText('content_post');
                $table->string('img_cover_post', 300)->nullable();
                $table->string('category_post', 500)->nullable();
                $table->string('title_seo_post', 200)->nullable();
                $table->string('description_seo_post', 350)->nullable();
                $table->string('keywords_seo_post', 400)->nullable();
                $table->integer('status_post');
                $table->timestamp('create_date_post');
                $table->timestamp('update_date_post');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_post');
    }
};
