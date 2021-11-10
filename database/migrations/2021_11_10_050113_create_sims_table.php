<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimsTable extends Migration
{
    public function up()
    {
        Schema::create('sims', function (Blueprint $table) {
            $table->id();
            $table->integer('phone');
            $table->integer('ICCID');
            $table->string('COMPANY');
            $table->integer('CELLPHONE_MINUTES');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sims');
    }
}
