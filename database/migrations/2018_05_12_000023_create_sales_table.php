<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration {

    public function up() {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->double('amount');
            $table->double('exit_price');
            $table->double('cost_price');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::drop('sales');
    }

}
