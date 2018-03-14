<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class tienda extends Model
{
    protected $table='tienda';

    protected $primaryKey='idtienda';

    public $timestamps=false;


    protected $fillable =[
    	
			
            'idtienda',
            'nombre',
            'letrae',
            'letrao',
            

    ];

    protected $guarded =[

    ];//
}
