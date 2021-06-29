<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class venta extends Model
{
    
    use HasFactory;
    protected $table = 'ventas'; //No hace falta pero por nomenclatura
    protected $guarded = []; //Asignacion maxiva
}
