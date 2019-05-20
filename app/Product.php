<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
       protected $fillable = [
        'id',
        'product_name',
        'product_price',
        'product_qty',
        'product_img',
        'category_id'  
      ];
}
