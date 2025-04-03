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
        Schema::create('t100_products', function (Blueprint $table) {
            $table->id('t100_rowid');
            $table->string('t100_name_product');
            $table->string('t100_cod_product');
            $table->text('t100_desc_product');
            $table->decimal('t100_price_product',8,2);
            $table->Integer('t100_stock_product');
            $table->Integer('t100_status_product');
            $table->string('t100_publishing_policies');
            $table->unsignedBigInteger('t090_product_category');
            $table->foreign('t090_product_category','fk_product_product_category')->references('t090_rowid')->on('t090_category_products')->onDelete('restrict')->onUpdate('cascade');
            $table->unsignedBigInteger('t100_seller');
            $table->foreign('t100_seller','fk_vendedor_producto')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t100_producst');
    }
};
