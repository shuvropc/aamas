<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("vendor_name");
            $table->string("contact_number");
            $table->string("email");
            $table->string("password");
            $table->string("website");
            $table->string("address");
            $table->string("country");
            $table->string("zipcode");
            $table->integer("discount");
            $table->string("logo_image");
            $table->string("company_reg_number");
            $table->string("product_types");
            $table->boolean("status");
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
        Schema::dropIfExists('vendors');
    }
}
