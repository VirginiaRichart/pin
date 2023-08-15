<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use SoftDeletes;
    protected $table = 'clientes';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','apellido','correo','telefono'];

    //Relacion a muchos con Mensaje
    public function mensajes()//un cliente muchos mensajes
    {
        return $this->hasMany(Mensaje::class,'cliente_id','id');
    }
}
