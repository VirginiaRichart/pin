<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mensaje extends Model
{
    use SoftDeletes;
    protected $table = 'mensajes';
    protected $fillable = [
        'mensaje',
        'fecha',
        'catalogo'
    ];

    public function cliente()//muchos mensajes un cliente
    {
        return $this->belongsTo(Cliente::class,'cliente_id','id');
    }
}
