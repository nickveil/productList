<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $products = [
    //     'name',
    //     'count',
    //     'price',
    //     'description'
    // ];

    protected $casts = [
        'product' => 'array',
    ];
}
