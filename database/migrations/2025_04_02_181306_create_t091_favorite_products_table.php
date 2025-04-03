<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t091_favorite_products', function (Blueprint $table) {
            $table->id('t091_rowid');
            $table->unsignedBigInteger('t100_product');
            $table->foreign('t100_product','fk_product_favorite_products')->references('t100_rowid')->on('t100_products')->onDelete('restrict')->onUpdate('cascade');
            $table->unsignedBigInteger('t091_costumer');
            $table->foreign('t091_costumer','fk_user_favorite_products')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t091_favorite_products');
    }
};
