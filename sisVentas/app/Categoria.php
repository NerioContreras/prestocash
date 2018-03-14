<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categoria';

    protected $primaryKey='idcategoria';

    public $timestamps=false;


    protected $fillable =[
    	'nombre',
    	'descripcion',
    	'interes',
        'mora',
    ];

    protected $guarded =[

    ];

}
