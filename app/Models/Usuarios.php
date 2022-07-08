<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Usuarios extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nombre',
        'parcial_1',
        'parcial_2',
        'parcial_3'
    ];

    public static function getUsuarios($limit, $offset, $order, $dir){
        return DB::table('usuarios')->select(DB::raw("id, nombre,  parcial_1, parcial_2, parcial_3, ROUND((parcial_1 + parcial_2 + parcial_3) / 3, 2) as promedio, '' AS opciones"))
        ->orderBy($order, $dir)
        ->skip($offset)->take($limit)->get();
    }
}
