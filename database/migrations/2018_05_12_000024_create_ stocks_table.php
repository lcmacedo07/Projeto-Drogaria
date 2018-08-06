<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration {

    public function up() {
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('sto_codigo');
            $table->string('sto_name', 60);
            $table->double('sto_available_inventory');
            $table->double('sto_cost_value');
            $table->double('sto_salue_value');
            $table->double('sto_profit_value');
            /* USAR EM TODAS */
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::drop('stocks');
    }

}
