<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';
    public $timestamps = true;
    public function category(){
        return $this->belongsTo('App\Models\Category','cate_id','id');
    }

    public function products()
    {
        return $this->hasMany('App\Models\Product', 'cate_id', 'id');
    }
}
