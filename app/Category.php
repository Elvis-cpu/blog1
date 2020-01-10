<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table= "categories";

    protected $fillable =["name"];

    //esta funcion retorna al modelo article
    public function Articles(){
        return $this->hasMany('App\Article');
    }
}
