<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained()->cascadeOnDelete();
            $table->string('name', 100);
            $table->string('slug', 120);
            $table->integer('sort_order')->default(0);
            $table->timestamps(6);

            $table->unique(['tenant_id', 'slug']);
        });

        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained()->cascadeOnDelete();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->string('name', 150);
            $table->string('slug', 170);
            $table->text('description')->nullable();
            $table->unsignedInteger('price_amount');
            $table->boolean('is_available')->default(true);
            $table->timestamps(6);
            $table->softDeletes('deleted_at', 6);

            $table->unique(['tenant_id', 'slug']);
            $table->unique(['tenant_id', 'id']);
            $table->index(['tenant_id', 'is_available']);
        });

        Schema::create('menu_modifiers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained()->cascadeOnDelete();
            $table->foreignId('menu_id')->constrained()->cascadeOnDelete();
            $table->string('name', 100);
            $table->integer('price_delta')->default(0);
            $table->timestamps(6);
        });

        Schema::create('table_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained()->cascadeOnDelete();
            $table->string('table_number', 20);
            $table->binary('token_hash', 32)->unique();
            $table->timestamp('expires_at', 6);
            $table->timestamps(6);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('table_sessions');
        Schema::dropIfExists('menu_modifiers');
        Schema::dropIfExists('menus');
        Schema::dropIfExists('categories');
    }
};
