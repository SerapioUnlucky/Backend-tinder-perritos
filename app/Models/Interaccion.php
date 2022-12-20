<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interaccion extends Model
{
    use HasFactory;

    protected $table = 'interaccion';
    protected $primaryKey = 'id';

    public $timestamps = 'id';

    public $fillable = [
        "perr_interesado",
        "perr_candidato",
        "preferencia"
    ];

    public function perro(){

        return $this->belongsTo(Perro::class, "perr_interesado","perr_candidado");
    
    }
    
}
