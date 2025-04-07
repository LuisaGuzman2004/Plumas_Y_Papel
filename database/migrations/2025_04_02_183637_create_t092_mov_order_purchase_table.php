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
        Schema::create('t092_mov_order_purchase', function (Blueprint $table) {
            $table->id('t092_rowid');
            $table->unsignedBigInteger('t092_customer');
            $table->foreign('t092_customer','fk_mov_order_product_user')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->unsignedBigInteger('t100_product');
            $table->foreign('t100_product','fk_mov_order_product')->references('t100_rowid')->on('t100_products')->onDelete('restrict')->onUpdate('cascade');            $table->string('t092_code_product');
            $table->integer('t092_product_quantity');
            $table->unsignedBigInteger('t093_order');
            $table->foreign('t093_order','fk_mov_order')->references('t093_rowid')->on('t093_order_purchase')->onDelete('restrict')->onUpdate('cascade');
            $table->integer('t092_product_price');
            $table->integer('t092_total_product_price');
            $table->date('t092_purchase_date');
            $table->integer('t092_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t092_mov_order_purchase');
    }
};
