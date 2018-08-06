<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('prod_codigo');
            $table->integer('cat_codigo')->unsigned();
            $table->foreign('cat_codigo')->references('cat_codigo')->on('categorys')->onDelete('cascade');
            $table->integer('pro_codigo')->unsigned();
            $table->foreign('pro_codigo')->references('pro_codigo')->on('providers')->onDelete('cascade');
            $table->string('prod_description',1000);
            $table->double('prod_weight');
            $table->string('prod_controlled');
            $table->integer('prod_determined_amount');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('products');
    }

}

