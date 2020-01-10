<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
   protected $table = "images";

   protected $fillable = ['name', "article_id"];

    //esta funcion retorna al modelo article
   public function articles()
   {
      return $this->belongsTo('App\Article');
   }
}
