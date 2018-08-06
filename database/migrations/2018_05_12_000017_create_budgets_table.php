<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetsTable extends Migration {

    public function up() {
        Schema::create('budgets', function (Blueprint $table) {
            $table->increments('bud_codigo');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('bud_validateproposal');
            $table->string('bud_conditionspayments', 30);
            $table->integer('bud_qtdpayments');
            $table->integer('bud_value');
            $table->integer('bud_discount')->nullable();
            $table->string('bud_status', 30);
            /* USAR EM TODAS */
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::drop('budgets');
    }

}
