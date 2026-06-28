<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('gallery')) {
            Schema::create('gallery', function (Blueprint $table) {
                $table->id();
                $table->string('title', 150)->nullable();
                $table->string('image');
                $table->string('category', 100)->nullable();
                $table->enum('status', ['active', 'inactive'])->default('active');
                $table->timestamp('created_at')->useCurrent();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('gallery');
    }
};
