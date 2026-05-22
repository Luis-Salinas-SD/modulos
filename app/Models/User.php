<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{

    use HasFactory, Notifiable;

    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'email',
        'password',
        'jornada',
    ];

    /**
     * Relación correcta: Queremos obtener las OFICINAS del usuario.
     */
    public function oficinas(): BelongsToMany
    {
        return $this->belongsToMany(
            Office::class,         // 1. Destino FINAL de la relación (las oficinas)
            'oficina_usuarios',    // 2. Nombre de la tabla intermedia en la BD
            'usuario_id',          // 3. FK de usuarios en la tabla intermedia
            'oficina_id'           // 4. FK de oficinas en la tabla intermedia
        )
            ->withTimestamps(); // Si quieres que Laravel maneje created_at y updated_at en la tabla pivote
    }
}
