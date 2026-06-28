<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('services')) {
            Schema::create('services', function (Blueprint $table) {
                $table->id();
                $table->string('title', 150);
                $table->string('slug', 150)->unique();
                $table->text('description')->nullable();
                $table->string('icon', 100)->nullable();
                $table->string('image')->nullable();
                $table->integer('sort_order')->default(0);
                $table->enum('status', ['active', 'inactive'])->default('active');
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
