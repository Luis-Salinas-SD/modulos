<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Office extends Model
{
    //
    protected $table = 'oficinas';
    protected $primaryKey = 'id_oficina';
    protected $fillable = [
        'nombre',
        'estado',
    ];

    // Relación inversa: Queremos obtener los USUARIOS de la oficina.
    public function usuarios(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,       // 1. Destino FINAL de la relación (los usuarios)
            'oficina_usuarios',   // 2. Nombre de la tabla intermedia en la BD
            'oficina_id',         // 3. FK de oficinas en la tabla intermedia
            'usuario_id'          // 4. FK de usuarios en la tabla intermedia
        )
            ->withTimestamps(); // Si quieres que Laravel maneje created_at y updated_at en la tabla pivote
    }
}
