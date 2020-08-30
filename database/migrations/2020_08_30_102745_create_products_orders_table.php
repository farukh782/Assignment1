<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_orders', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('qty')->unsigned();
			$table->string('status');
			
			$table->integer('pro_id')->unsigned();
			$table->foreign('pro_id')->references('id')->on('products')->onDelete('cascade');
			
			$table->integer('ord_id')->unsigned();
			$table->foreign('ord_id')->references('id')->on('orders')->onDelete('cascade');
			
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
        Schema::dropIfExists('products_orders');
    }
}
