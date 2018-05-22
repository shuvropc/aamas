<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("contact_number");
            $table->string("email");
            $table->string("website");
            $table->string("addess");
            $table->string("city");
            $table->string("zipcode");
            $table->string("registration_date");
            $table->string("last_update_date");
            $table->integer("discount");
            $table->string("logo_image");
            $table->string("company_reg_number");
            $table->string("product_types");
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
        Schema::dropIfExists('vendor');
    }
}