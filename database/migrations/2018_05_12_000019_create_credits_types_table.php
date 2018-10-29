<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditsTypesTable extends Migration {

    public function up() {
        Schema::create('credits_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descriptions', 120);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::drop('credits_types');
    }

}
