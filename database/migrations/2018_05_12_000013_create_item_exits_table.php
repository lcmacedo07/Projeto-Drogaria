<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemExitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_exits', function (Blueprint $table) {
            $table->increments('iteme_codigo');
            $table->integer('exi_codigo')->unsigned();
            $table->foreign('exi_codigo')->references('exi_codigo')->on('exits')->onDelete('cascade');
            $table->integer('prod_codigo')->unsigned();
            $table->foreign('prod_codigo')->references('prod_codigo')->on('products')->onDelete('cascade');
            $table->string('iteme_lot',30);
            $table->integer('iteme_amount');
            $table->double('iteme_value');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_exits');
    }
}
