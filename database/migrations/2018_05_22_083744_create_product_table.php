<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string("product_name");
            $table->string("product_description");
            $table->integer("buying_price");
            $table->integer("selling_price");
            $table->integer("discount_available");
            $table->string("last_update_date");
            $table->string("image");
            $table->integer("available");
            $table->integer("status");

            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('category');

            $table->unsignedInteger('vendor_id');
            $table->foreign('vendor_id')->references('id')->on('vendor');

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
        Schema::dropIfExists('product');
    }
}
