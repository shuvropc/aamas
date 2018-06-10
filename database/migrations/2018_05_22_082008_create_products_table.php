<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            $table->increments('id');
            $table->string("product_name");
            $table->string("product_description",2000);
            $table->integer("buying_price");
            $table->integer("selling_price");
            $table->integer("discount");
            $table->string("brand");

            $table->string("image1")->nullable();
            $table->string("image2")->nullable();
            $table->string("image3")->nullable();
            $table->string("image4")->nullable();
            $table->boolean("available");
            $table->boolean("aamas_status")->default(1);
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedInteger('vendor_id');
            $table->foreign('vendor_id')->references('id')->on('vendors');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
