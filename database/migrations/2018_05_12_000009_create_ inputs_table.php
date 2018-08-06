<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('inputs', function (Blueprint $table) {
            $table->increments('inp_codigo');
            $table->integer('con_codigo')->unsigned();
            $table->foreign('con_codigo')->references('con_codigo')->on('conveyors')->onDelete('cascade');
            $table->date('inp_requested_date');
            $table->date('inp_entry_date');
            $table->double('inp_total');
            $table->double('inp_freight');
            $table->integer('inp_numnf');
            $table->double('inp_tax');
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
        Schema::dropIfExists('inputs');
    }

}
