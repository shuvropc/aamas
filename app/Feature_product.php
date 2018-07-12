<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Feature_product extends Model
{
    protected $table = 'feature_products';
    public function Product(){
        return $this->belongsTo(Product::class);
    }
}
