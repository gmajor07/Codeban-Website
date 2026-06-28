<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('contact_messages')) {
            Schema::create('contact_messages', function (Blueprint $table) {
                $table->id();
                $table->string('name', 150);
                $table->string('email', 150)->nullable();
                $table->string('phone', 50)->nullable();
                $table->string('subject', 200)->nullable();
                $table->text('message');
                $table->enum('status', ['new', 'read', 'replied'])->default('new');
                $table->timestamp('created_at')->useCurrent();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_messages');
    }
};
