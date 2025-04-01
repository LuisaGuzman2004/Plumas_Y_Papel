<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    use HasFactory;
    protected $table = 't100_products';
    protected $primaryKey = 't100_rowid'; // Definir la clave primaria
}
