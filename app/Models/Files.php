<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;
    protected $table = 't080_files';
    protected $primaryKey = 't080_rowid'; // Definir la clave primaria
}
