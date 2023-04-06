<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class alumnomodel extends Model
{
    use HasFactory, HasApiTokens;

    protected $table = "alumno";

    protected $fillable = [
        'id',
        'name',
        'phone',
        'age',
        'mail',
        'genre'
    ];

    protected $hidden = [
        'password',
        'create_at',
        'update_at'
    ];

    public function direccion()
    {
        return $this->hasOne(direccionmodel::class);
    }

    public function direcciones()
    {
        return $this->hasMany(direccionmodel::class);
    }
}
