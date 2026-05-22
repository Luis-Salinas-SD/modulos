<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Module extends Model
{
    //Tabla
    protected $table = 'modulo';
    //Llave primaria
    protected $primaryKey = 'id_modulo';
    //Campos que se pueden llenar
    protected $fillable = [
        'nombre',
        'zona',
        'estado',
    ];

    /*
    * Relación: Un módulo tiene muchos usuarios
    * Relacion uno a muchos.
    */
    public function usuarios(): HasMany
    {
        return $this->hasMany(
            User::class,
            'id_modulo', // FK en la tabla usuarios que referencia a modulo
            'id_modulo'  // PK en la tabla modulo
        );
    }
}
