<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConveyorsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('conveyors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('citys')->onDelete('cascade');
            $table->string('conveyors', 200);
            $table->string('address', 200);
            $table->integer('num');
            $table->string('neighborhood', 30);
            $table->string('cep', 14);
            $table->string('cnpj', 20);
            $table->string('insc', 20)->nullable();
            $table->string('contact', 14);
            $table->string('telephone', 14);
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
        Schema::dropIfExists('conveyors');
    }

}
