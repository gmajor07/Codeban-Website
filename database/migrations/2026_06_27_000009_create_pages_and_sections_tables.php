<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('pages')) {
            Schema::create('pages', function (Blueprint $table) {
                $table->id();
                $table->string('title', 150);
                $table->string('slug', 150)->unique();
                $table->longText('content')->nullable();
                $table->enum('status', ['published', 'draft'])->default('published');
                $table->timestamp('created_at')->useCurrent();
            });
        }

        if (! Schema::hasTable('sections')) {
            Schema::create('sections', function (Blueprint $table) {
                $table->id();
                $table->foreignId('page_id')->nullable()->constrained()->cascadeOnDelete();
                $table->string('section_key', 100)->nullable();
                $table->string('title', 200)->nullable();
                $table->text('subtitle')->nullable();
                $table->longText('content')->nullable();
                $table->string('button_text', 100)->nullable();
                $table->string('button_link')->nullable();
                $table->string('image')->nullable();
                $table->integer('sort_order')->default(0);
                $table->enum('status', ['active', 'inactive'])->default('active');
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('sections');
        Schema::dropIfExists('pages');
    }
};
