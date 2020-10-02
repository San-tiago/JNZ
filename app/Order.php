<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'product_name', 'category', 'price','quantity', 'customer','total',
    ];
}
