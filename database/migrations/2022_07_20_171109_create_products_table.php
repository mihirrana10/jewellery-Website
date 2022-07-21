<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("product_name");
            $table->string("product_style_number");
            
            $table->string("metal_type");
            $table->float("metal_weight",10, 2);
            $table->string("metal_unit");
            $table->integer("metal_purity");
            $table->string("metal_color");
            $table->double("metal_price",15, 2);

            $table->string("diamond_type")->nullable();
            $table->string("diamond_color")->nullable();
            $table->integer("diamond_count")->nullable();
            $table->double("diamond_price",15,2)->nullable();
            $table->string("diamond_setting_type")->nullable();
            $table->string("diamond_grade")->nullable();
            $table->float("diamond_gross_weight",10,2)->nullable();
            $table->string("diomond_weight_unit")->nullable();

            $table->float("product_height",10, 2)->nullable();
            $table->float("product_width",10,2)->nullable();
            $table->longText("product_description");
            // $table->bigInteger("product_image_id");
            $table->float("product_discount",5,2);               
            $table->float("product_gst",5,2); 
            $table->float("product_size",5,2); 
            $table->float("product_length",5,2);
            $table->unsignedbigInteger("category_id"); 

             
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

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
};
