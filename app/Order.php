<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    function products(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
