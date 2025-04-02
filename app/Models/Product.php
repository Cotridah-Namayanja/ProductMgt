<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable=[
        'name',
        'description',
        'stock',
        'price',
        'manufactured_at',
        'sku',
    ];
}
