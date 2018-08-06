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
            $table->increments('con_codigo');
            $table->integer('cit_codigo')->unsigned();
            $table->foreign('cit_codigo')->references('cit_codigo')->on('citys')->onDelete('cascade');
            $table->string('con_conveyors', 200);
            $table->string('con_address', 200);
            $table->integer('con_num');
            $table->string('con_neighborhood', 30);
            $table->string('con_cep', 14);
            $table->string('con_cnpj', 20);
            $table->string('con_insc', 20)->nullable();
            $table->string('con_contact', 14);
            $table->string('con_telephone', 14);
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
