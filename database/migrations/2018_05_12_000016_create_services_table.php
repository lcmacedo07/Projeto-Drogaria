<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration {

    public function up() {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('serv_codigo');
            $table->string('serv_type', 200);
            $table->string('serv_description', 500);
            $table->float('serv_value', 10, 2);
            /* USAR EM TODAS */
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::drop('services');
    }

}
