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
            $table->string('t100_nom_product');
            $table->text('t100_desc_product');
            $table->decimal('t100_price_product',8,2);
            $table->Integer('t100_stock_product');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t100_products');
    }
};
