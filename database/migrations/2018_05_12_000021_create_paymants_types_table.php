<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymantsTypesTable extends Migration {

    public function up() {
        Schema::create('paymants_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 120);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::drop('paymants_types');
    }

}
