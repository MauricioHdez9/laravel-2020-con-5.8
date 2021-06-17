<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // protected $table ='my_table';//en caso de que no concida el nombres de la tablas 
    // protected $fillable = ['title','url','description'];// permite pasar masivamente  los  datos especificados  y evita que usuarios mal intecionados no manden otras cosas 
    // protected $guarded = ['id','approved','created_at','updated_at'];//datos que no quieres que se asignen masiva mente 
    protected $guarded = [];

    public function getRouteKeyName()// esta funcion viene por defecto y agara por defecto el id de las tablas pero se pude modificar para hacer unas url mas amigables 
    {
        return 'url';
    }
}
