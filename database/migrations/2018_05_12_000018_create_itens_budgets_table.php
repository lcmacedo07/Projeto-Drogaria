<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItensBudgetsTable extends Migration {

    public function up() {
        Schema::create('itens_budgets', function (Blueprint $table) {
            $table->increments('ib_codigo');
            $table->integer('bud_codigo')->unsigned();
            $table->foreign('bud_codigo')->references('bud_codigo')->on('budgets')->onDelete('cascade');
            $table->integer('serv_codigo')->unsigned();
            $table->foreign('serv_codigo')->references('serv_codigo')->on('services')->onDelete('cascade');
            $table->integer('ib_quant');
            /* USAR EM TODAS */
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::drop('itens_budgets');
    }

}
