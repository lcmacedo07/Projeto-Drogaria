<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditsTypesTable extends Migration {

    public function up() {
        Schema::create('credits_types', function (Blueprint $table) {
            $table->increments('ct_codigo');
            $table->string('ct_descriptions', 120);
            /* USAR EM TODAS */
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::drop('credits_types');
    }

}
