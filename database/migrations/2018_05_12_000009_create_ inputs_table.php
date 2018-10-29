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
            $table->increments('id');
            $table->integer('conveyor_id')->unsigned();
            $table->foreign('conveyor_id')->references('id')->on('conveyors')->onDelete('cascade');
            $table->date('requested_date');
            $table->date('entry_date');
            $table->double('total');
            $table->double('freight');
            $table->double('numnf');
            $table->double('tax');
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
