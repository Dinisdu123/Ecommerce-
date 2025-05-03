<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Product extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'products';

    protected $fillable = [
        'Name',
        'Description',
        'ImageUrl',
        'Price',
        'StockQuantity',
        'Category',
        'SubCategory'
    ];
}
