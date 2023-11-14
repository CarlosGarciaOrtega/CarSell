<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    
    protected $table='cars';
    
    protected $fillable=['marca','modelo',
                'version',
                'km',
                'precio',
                'año',
                'trasmision',
                'combustible',
                'cv',
                'pais',
                'estado',
                'carroceria',
                'puertas',
                'categoriaEmisiones'];
                
                }
