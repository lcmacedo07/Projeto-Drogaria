<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration {

    public function up() {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('sal_codigo');
            $table->date('sal_date');
            $table->double('sal_amount');
            $table->double('sal_exit_price');
            $table->double('sal_cost_price');
            /* USAR EM TODAS */
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::drop('sales');
    }

}
