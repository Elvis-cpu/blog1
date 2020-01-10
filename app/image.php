<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
   protected $table = "images";

   protected $fillable = ['name', "article_id"];
}
