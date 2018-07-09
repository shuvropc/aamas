<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Vendor;
use App\Feature_product;

class Product extends Model
{
    //
    public function Products(){
        $sql = "SELECT * FROM `products` 
                INNER JOIN categories ON products.category_id = categories.id 
                INNER JOIN vendors ON products.vendor_id = vendors.id
                INNER JOIN details ON products.details_id = details.id";


        return DB::select($sql);
    }

    public function getProductWithAllDetails($id){
        $sql = "SELECT * FROM `products` 
                INNER JOIN categories ON products.category_id = categories.id 
                INNER JOIN vendors ON products.vendor_id = vendors.id
                INNER JOIN details ON products.id = details.product_id
                WHERE products.id = ".$id;


        return DB::select($sql);
    }

    public function Feature(){
       return $this->hasOne(Freature_product::class);
    }

}
