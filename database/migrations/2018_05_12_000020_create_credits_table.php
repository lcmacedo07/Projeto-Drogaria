<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditsTable extends Migration {

    public function up() {
        Schema::create('credits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('credits_type_id')->unsigned();
            $table->foreign('credits_type_id')->references('id')->on('credits_types')->onDelete('cascade');

            $table->integer('budget_id')->unsigned();
            $table->foreign('budget_id')->references('id')->on('budgets')->onDelete('cascade');

            $table->date('datereferencies');
            $table->date('datelaunch');
            $table->date('datematurity');
            $table->date('datereceipt');
            $table->float('value', 10, 2);
            $table->float('valuereceipt', 10, 2);
            $table->string('documentnumber', 20)->nullable();
            $table->string('ournumber', 25)->nullable();
            $table->string('complements', 200);
            $table->string('status', 50);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::drop('credits');
    }

}
