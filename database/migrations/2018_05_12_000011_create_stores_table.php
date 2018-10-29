<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('citys')->onDelete('cascade');
            $table->string('name', 30);
            $table->string('cnpj', 20);
            $table->string('address', 200);
            $table->char('uf', 2);
            $table->string('telephone', 14);
            $table->string('zip_code', 15);
            $table->string('social_reason', 200);
            $table->string('fantasy_name', 200);
            $table->string('insc', 20)->nullable();
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
        Schema::dropIfExists('stores');
    }

}
