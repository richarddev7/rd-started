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
        if (! Schema::hasTable('app_post_categories')) {
            Schema::create('app_post_categories', function (Blueprint $table) {
                $table->integer('id_post_category', true)->primary();
                $table->string('name_category', 200);
                $table->string('slug_category', 300)->unique();
                $table->string('description_category', 500)->nullable();
                $table->timestamp('create_date_category');
                $table->timestamp('update_date_category');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_post_categories');
    }
};
