<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemInputsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('item_inputs', function (Blueprint $table) {
            $table->increments('itemi_codigo');
            $table->integer('prod_codigo')->unsigned();
            $table->foreign('prod_codigo')->references('prod_codigo')->on('products')->onDelete('cascade');
            $table->integer('inp_codigo')->unsigned();
            $table->foreign('inp_codigo')->references('inp_codigo')->on('inputs')->onDelete('cascade');
            $table->string('itemi_lot', 30);
            $table->integer('itemi_amount');
            $table->double('itemi_value');
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
        Schema::dropIfExists('item_inputs');
    }

}

