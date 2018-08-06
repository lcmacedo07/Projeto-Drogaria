<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditsTable extends Migration {

    public function up() {
        Schema::create('credits', function (Blueprint $table) {
            $table->increments('cred_codigo');
            $table->integer('ct_codigo')->unsigned();
            $table->foreign('ct_codigo')->references('ct_codigo')->on('credits_types')->onDelete('cascade');

            $table->integer('bud_codigo')->unsigned();
            $table->foreign('bud_codigo')->references('bud_codigo')->on('budgets')->onDelete('cascade');

            $table->date('cred_datereferencies');
            $table->date('cred_datelaunch');
            $table->date('cred_datematurity');
            $table->date('cred_datereceipt');
            $table->float('cred_value', 10, 2);
            $table->float('cred_valuereceipt', 10, 2);
            $table->string('cred_documentnumber', 20)->nullable();
            $table->string('cred_ournumber', 25)->nullable();
            $table->string('cred_complements', 200);
            $table->string('cred_status', 50);
            /* USAR EM TODAS */
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::drop('credits');
    }

}
