<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Propiedad $fillable para permitir asignación masiva
    protected $fillable = ['name', 'description'];

    // Relación con el modelo User (uno a muchos)
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
