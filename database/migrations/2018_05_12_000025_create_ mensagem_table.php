<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensagemTable extends Migration {

    public function up() {
        Schema::create('mensagens', function (Blueprint $table) {
            $table->increments('men_codigo');
            $table->string('men_name', 60);
            $table->string('men_email', 60);
            $table->string('men_description', 500);
            /* USAR EM TODAS */
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::drop('mensagens');
    }

}
