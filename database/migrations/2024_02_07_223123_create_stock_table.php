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
            $table->string('name');
            $table->boolean('active')->default(true);
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code', 12);
            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('active')->default(true);
            $table->foreignId('category_id')->constrained();
            $table->timestamps();
        });

        Schema::create('variants', function (Blueprint $table) {
            $table->id();
            $table->string('code', 12);
            $table->string('description');
            $table->integer('price')->nullable();
            $table->integer('stock')->nullable();
            $table->boolean('active')->default(true);
            $table->foreignId('product_id')->constrained();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('variants');
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
    }
};
