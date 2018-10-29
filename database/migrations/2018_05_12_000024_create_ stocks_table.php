<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration {

    public function up() {
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60);
            $table->double('available_inventory');
            $table->double('cost_value');
            $table->double('salue_value');
            $table->double('profit_value');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::drop('stocks');
    }

}
