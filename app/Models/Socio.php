<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;
    protected $fillable = ['nombres', 'apellidos', 'direction', 'edad', 'estado', 'dni', 'celular', 'genero'];
}
