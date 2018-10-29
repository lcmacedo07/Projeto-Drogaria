<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration {

    public function up() {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 200);
            $table->string('description', 500);
            $table->float('value', 10, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::drop('services');
    }

}
