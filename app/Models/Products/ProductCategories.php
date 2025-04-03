<?php

namespace App\Models\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    //
        use HasFactory;
        protected $table = 't090_category_products';
        protected $primaryKey = 't090_rowid'; // Definir la clave primaria
}
