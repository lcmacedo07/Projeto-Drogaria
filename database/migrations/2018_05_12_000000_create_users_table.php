<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 120);
            $table->char('genre', 1);
            $table->date('date_of_birth');
            $table->string('cpf', 14);
            $table->string('rg', 30)->nullable();
            $table->string('telephone', 14);
            $table->string('cellphone', 16)->nullable();
            $table->string('cellphone2', 16)->nullable();
            $table->string('email')->unique();
            $table->string('password', 400);
            $table->string('type', 20); 
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
//        Schema::dropIfExists('users');
        Schema::drop('users');
    }

}