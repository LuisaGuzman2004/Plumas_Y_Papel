<?php

namespace App\Models\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class MovOrderProducts extends Model
{
    use HasFactory;
    protected $table = 't092_mov_order_purchase';
    protected $primaryKey = 't092_rowid'; // Definir la clave primaria
}
