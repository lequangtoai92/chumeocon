<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public $timestamps = false;
    protected $table = "posts";

    // public function category(){
    // 	return $this->belongsTo('App\Categories','id','id');
    // }
}
