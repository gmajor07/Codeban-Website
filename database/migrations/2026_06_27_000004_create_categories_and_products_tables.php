<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('categories')) {
            Schema::create('categories', function (Blueprint $table) {
                $table->id();
                $table->string('name', 150);
                $table->string('slug', 150)->unique();
                $table->text('description')->nullable();
                $table->string('image')->nullable();
                $table->enum('status', ['active', 'inactive'])->default('active');
                $table->timestamp('created_at')->useCurrent();
            });
        }

        if (! Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
                $table->string('name', 200);
                $table->string('slug', 200)->unique();
                $table->text('description')->nullable();
                $table->string('image')->nullable();
                $table->boolean('featured')->default(false);
                $table->enum('status', ['active', 'inactive'])->default('active');
                $table->timestamp('created_at')->useCurrent();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
    }
};
