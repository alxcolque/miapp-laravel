<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table='documentos';
    protected $fillable=['nombre','descripcion','fecha_alta','fecha_modificacion','url','tipo_id','usuario_id'];
    public function FInsDocumento_ToTipo()
    {
        return $this->belongsTo('App\Tipo', 'tipo_id');
    }
    public function FInsDocumento_ToUsuario()
    {
        return $this->belongsTo('App\User', 'usuario_id');
    }
}
