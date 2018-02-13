<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'alias', 'logo'];
    public function getRouteKeyName()
    {
        return 'alias';
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
