<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =['customer_name','email','phone','feedback'];

//    public function getRouteKeyName()
//    {
//        return 'id';
//    }
}
