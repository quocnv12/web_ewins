<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCateprizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('cate_prize', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->text('note');
            $table->biginteger('prize_id')->unsigned();
            $table->foreign('prize_id')->references('id')->on('prize')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('cate_prize_new', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->text('note');
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
        Schema::dropIfExists('cateprize');
    }
}
