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
        Schema::create('t093_order_purchase', function (Blueprint $table) {
            $table->id('t093_rowid');
            $table->uuid('t093_uuid')->unique();
            $table->unsignedBigInteger('t093_customer');
            $table->foreign('t093_customer','fk_order_product_user')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->date('t093_purchase_date');
            $table->integer('t093_order_price');
            $table->integer('t093_order_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t093_order_purchase');
    }
};
