<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends User
{

    /*
    use SoftDeletes;
    
    protected $table = 'usuarios';    
    protected $primaryKey = 'id';    
    protected $fillable = ['name', 'nombre_completo', 'password', 'avatar', 'usu_verificado', 'tipo', 'direccion', 'localidad', 'email', 'telefono', 'observacion', 'remember_token', 'email_verified_at'];

    public function cliente()
    {
        return $this->belongsTo('Cliente');
    }
    **/
}
