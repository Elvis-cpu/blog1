<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";

    protected $fillable = ['title', 'content', 'category_id', 'user_id'];
    //esta funcion retorna al modelo cartegory
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    //esta funcion enlaza al modelo user
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    //esta funcion enlaza al modelo image
    public function images()
    {
       return $this->hasMany('App\image');
    }
    public function tags()
    {
        return $this->belongsToMany('App\tag');
    }
}
