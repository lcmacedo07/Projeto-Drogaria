<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymantsTable extends Migration {

    public function up() {
        Schema::create('paymants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paymants_type_id')->unsigned();
            $table->foreign('paymants_type_id')->references('id')->on('paymants_types')->onDelete('cascade');
            $table->date('datelaunch');
            $table->date('datematurity');
            $table->date('datepayment');
            $table->float('value', 10, 2);
            $table->string('complements', 200);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::drop('paymants');
    }

}
