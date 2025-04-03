<?php

namespace App\Models\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class FavoriteProducts extends Model
{
    use HasFactory;
    protected $table = 't091_favorite_purchase';
    protected $primaryKey = 't091_rowid'; // Definir la clave primaria
}
