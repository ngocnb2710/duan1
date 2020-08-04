<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ='categories';
    public $timestamps = true;

    public function products() {
        return $this->hasMany('App\Models\Product');
    }
    public function categories()
    {
        return $this->belongsTo('App\AllCategoryModel', 'cate_id', 'id');
    }
}
