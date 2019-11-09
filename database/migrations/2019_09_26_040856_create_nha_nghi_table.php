<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhaNghiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanghi', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->unsignedBigInteger('diadiem_id');
            $table->foreign('diadiem_id')->references('id')->on('diadiem');
            $table->string('tennhanghi');
            $table->string('diachi');
            $table->integer('sophong');
            $table->time('giomocua');
            $table->string('ghichu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanghi');
    }
}
