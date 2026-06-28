<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('testimonials')) {
            Schema::create('testimonials', function (Blueprint $table) {
                $table->id();
                $table->string('client_name', 150)->nullable();
                $table->string('company', 150)->nullable();
                $table->text('message')->nullable();
                $table->string('image')->nullable();
                $table->enum('status', ['active', 'inactive'])->default('active');
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
