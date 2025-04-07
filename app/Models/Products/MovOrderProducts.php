<?php

namespace App\Models\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class MovOrderProducts extends Model
{
    use HasFactory;
    protected $table = 't092_mov_order_purchase';
    protected $primaryKey = 't092_rowid'; // Definir la clave primaria
    protected $fillable = [
        't092_customer',
        't100_product',
        't092_code_product',
        't092_product_quantity', 
        't093_order',
        't092_product_price',
        't092_total_product_price',
        't092_purchase_date',
        't092_status',
    ];
}
