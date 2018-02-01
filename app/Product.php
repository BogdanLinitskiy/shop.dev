<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =['title','alias','price','description','category_id'];

    public function getRouteKeyName()
    {
        return 'alias';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
