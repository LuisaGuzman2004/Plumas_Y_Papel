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
        Schema::create('t080_files', function (Blueprint $table) {
            $table->id('t080_rowid');
            $table->string('t080_url')->nullable();
            $table->string('t080_name')->nullable();
            $table->unsignedBigInteger('t100_product_id'); // Clave foránea a productos
            $table->boolean('t080_is_cover')->default(false); // Indica si es la imagen de portada
            $table->timestamps();
        
            $table->foreign('t100_product_id', 'fk_files_products')
                  ->references('t100_rowid')->on('t100_products')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t080_files');
    }
};
