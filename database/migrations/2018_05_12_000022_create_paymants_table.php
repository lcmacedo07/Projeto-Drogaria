<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymantsTable extends Migration {

    public function up() {
        Schema::create('paymants', function (Blueprint $table) {
            $table->increments('pay_codigo');
            $table->integer('pt_codigo')->unsigned();
            $table->foreign('pt_codigo')->references('pt_codigo')->on('paymants_types')->onDelete('cascade');
            $table->date('pay_datelaunch');
            $table->date('pay_datematurity');
            $table->date('pay_datepayment');
            $table->float('pay_value', 10, 2);
            $table->string('pay_complements', 200);
            /* USAR EM TODAS */
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::drop('paymants');
    }

}
