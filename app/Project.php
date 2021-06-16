<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //protected $table ='my_table';//en caso de que no concida el nombres de la tablas 
    public function getRouteKeyName()
    {
        return 'title';
    }
}
