<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('pur_codigo');
            $table->integer('pro_codigo')->unsigned();
            $table->foreign('pro_codigo')->references('pro_codigo')->on('providers')->onDelete('cascade');
            $table->date('pur_date');
            $table->string('pur_reference',200);
            $table->double('pur_amount');
            $table->double('pur_value');
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
        Schema::dropIfExists('purchases');
    }

}
