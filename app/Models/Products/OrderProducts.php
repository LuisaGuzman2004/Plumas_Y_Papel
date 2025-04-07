<?php

namespace App\Models\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class OrderProducts extends Model
{
    use HasFactory;
    protected $table = 't093_order_purchase';
    protected $primaryKey = 't093_rowid'; // Definir la clave primaria
    protected $fillable = [
        't093_uuid',
        't093_customer',
        't093_purchase_date',
        't093_order_price', 
        't093_order_status'
    ];
}
