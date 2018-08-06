<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymantsTypesTable extends Migration {

    public function up() {
        Schema::create('paymants_types', function (Blueprint $table) {
            $table->increments('pt_codigo');
            $table->string('pt_description', 120);
            /* USAR EM TODAS */
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::drop('paymants_types');
    }

}
