<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class direccionmodel extends Model
{
    use HasFactory;

    protected $table = "direcciones";

    protected $fillable = [
        'id',
        'alumno_id',
        'street',
        'city',
        'country',
        'postal_code'
    ];

    protected $hidden = [
        'create_at',
        'update_at'
    ];

    public function alumno()
    {
        return $this->belongsTo(alumnomodel::class);
    }
}
