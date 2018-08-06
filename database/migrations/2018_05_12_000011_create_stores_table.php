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
            $table->increments('sto_codigo');
            $table->integer('cit_codigo')->unsigned();
            $table->foreign('cit_codigo')->references('cit_codigo')->on('citys')->onDelete('cascade');
            $table->string('sto_name', 30);
            $table->string('sto_cnpj', 20);
            $table->string('sto_address', 200);
            $table->char('sto_uf', 2);
            $table->string('sto_telephone', 14);
            $table->string('sto_zip_code', 15);
            $table->string('sto_social_reason', 200);
            $table->string('sto_fantasy_name', 200);
            $table->string('sto_insc', 20)->nullable();
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
