<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class contrato extends Model
{
 protected $table='contrato';

    protected $primaryKey='idcontrato';

    public $timestamps=false;


    protected $fillable =[
    	

            'codigo',
            'dni',
            'nombre',
            'tienda',
            'fecha_inicio',
            'fecha_mes',
            'fecha_final',
            'categoria',
            'estatus',
            
    ];

    protected $guarded =[

    ];   //
}
