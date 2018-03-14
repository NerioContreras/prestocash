<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class articulos extends Model
{
    
    protected $table='articulo';

    protected $primaryKey='idarticulo';

    public $timestamps=false;


    protected $fillable =[
    	'idcategoria',
    	'idtienda',
    	'codigo',
        'nombre',
        'marca',
        'modelo',
        'obsv',
        'serial',
        'precio',
        'precioweb',
        'vitrina',
    ];

    protected $guarded =[

    ];

}
