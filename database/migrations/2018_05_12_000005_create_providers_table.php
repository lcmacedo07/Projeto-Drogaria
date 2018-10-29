<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('providers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('citys')->onDelete('cascade');
            $table->string('provider',200);
            $table->string('address',60);
            $table->integer('num');
            $table->string('neighborhood',40);
            $table->char('zip_code', 14);
            $table->string('contact',50);
            $table->char('cnpj', 20);
            $table->string('insc',120)->nullable();
            $table->char('telephone', 14);
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
        Schema::dropIfExists('providers');
    }

}
