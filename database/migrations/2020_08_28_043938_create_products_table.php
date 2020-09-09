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
             $table->increments('id')->unsigned();
             $table->string('productname');
             $table->string('price');
			 
           	 $table->integer('category_id')->unsigned();
	         $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');	      	 
			 $table->integer('tag_id')->unsigned();	
          	 $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
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
