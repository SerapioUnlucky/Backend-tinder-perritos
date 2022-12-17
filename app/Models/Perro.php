<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Perro extends Model
{
    use HasFactory;

    protected $table = 'perros';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        "perr_nombre",
        "perr_imagen",
        "descripcion"
    ];

    public function interacciones(){

        return $this->hasMany(Perro::class);
    
    }
}
