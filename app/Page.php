<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title','alias','intro','content'];

    public function getRouteKeyName()
    {
        return 'alias';
    }
}
