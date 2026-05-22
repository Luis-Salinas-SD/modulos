<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Authenticatable
{

    use HasFactory, Notifiable;
    //Tabla
    protected $table = 'usuarios';
    //Llave primaria
    protected $primaryKey = 'id';
    //Campos que se pueden llenar
    protected $fillable = [
        'nombre',
        'email',
        'password',
        'tipo_usuario',
        'id_modulo',
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

    /*
     * Relación correcta: El usuario pertenece a un módulo específico.
     * Relacion uno a uno.
     */
    public function modulo(): BelongsTo
    {
        return $this->belongsTo(
            Module::class,     // Destino FINAL de la relación (el módulo)
            'id_modulo',      // FK en la tabla usuarios
            'id_modulo'       // PK en la tabla modulo
        );
    }
}
