<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExitsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('exits', function (Blueprint $table) {
            $table->increments('exi_codigo');
            $table->integer('sto_codigo')->unsigned();
            $table->foreign('sto_codigo')->references('sto_codigo')->on('stores')->onDelete('cascade');
            $table->integer('con_codigo')->unsigned();
            $table->foreign('con_codigo')->references('con_codigo')->on('conveyors')->onDelete('cascade');
            $table->double('exi_total');
            $table->double('exi_freight');
            $table->double('exi_tax');
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
        Schema::dropIfExists('exits');
    }

}

