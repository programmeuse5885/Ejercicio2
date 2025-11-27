<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; # Importa el trait HasFactory
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; # Usa el trait HasFactory para habilitar las fábricas de modelos

    // Define los atributos que son asignables en masa
    protected $fillable = [
        'name',
        'description',
        'price',
    ];
}
