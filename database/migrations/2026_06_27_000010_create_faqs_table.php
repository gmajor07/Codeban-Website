<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('faqs')) {
            Schema::create('faqs', function (Blueprint $table) {
                $table->id();
                $table->string('page', 50)->default('services');
                $table->string('question', 255);
                $table->text('answer');
                $table->integer('sort_order')->default(0);
                $table->enum('status', ['active', 'inactive'])->default('active');
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('faqs');
    }
};
