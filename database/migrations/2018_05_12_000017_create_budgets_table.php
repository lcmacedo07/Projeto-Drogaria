<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetsTable extends Migration {

    public function up() {
        Schema::create('budgets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('validateproposal');
            $table->string('conditionspayments', 30);
            $table->integer('qtdpayments');
            $table->integer('value');
            $table->integer('discount')->nullable();
            $table->string('status', 30);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::drop('budgets');
    }

}
