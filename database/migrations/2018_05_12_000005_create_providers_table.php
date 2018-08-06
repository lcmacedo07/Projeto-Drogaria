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
            $table->increments('pro_codigo');
            $table->integer('cit_codigo')->unsigned();
            $table->foreign('cit_codigo')->references('cit_codigo')->on('citys')->onDelete('cascade');
            $table->string('pro_provider',200);
            $table->string('pro_address',60);
            $table->integer('pro_num');
            $table->string('pro_neighborhood',40);
            $table->char('pro_zip_code', 14);
            $table->string('pro_contact',50);
            $table->char('pro_cnpj', 20);
            $table->string('pro_insc',120)->nullable();
            $table->char('pro_telephone', 14);
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
