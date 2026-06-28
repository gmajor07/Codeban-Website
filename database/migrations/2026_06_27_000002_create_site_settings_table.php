<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('site_settings')) {
            Schema::create('site_settings', function (Blueprint $table) {
                $table->id();
                $table->string('company_name', 150)->nullable();
                $table->string('tagline', 150)->nullable();
                $table->string('phone1', 50)->nullable();
                $table->string('phone2', 50)->nullable();
                $table->string('phone3', 50)->nullable();
                $table->string('email1', 150)->nullable();
                $table->string('email2', 150)->nullable();
                $table->string('email3', 150)->nullable();
                $table->string('website', 150)->nullable();
                $table->string('instagram', 100)->nullable();
                $table->text('address')->nullable();
                $table->string('logo')->nullable();
                $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
