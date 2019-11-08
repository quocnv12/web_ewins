<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubTalentwins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_talentwins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('summary');
            $table->text('content');
            $table->string('image');
            $table->text('slug');
            $table->tinyInteger('status');
            $table->BigInteger('id_admin')->unsigned();
            $table->BigInteger('cate_id')->unsigned();
            $table->foreign('id_admin')
                  ->references('id')
                  ->on('admin');
            $table->foreign('cate_id')
                  ->references('id')
                  ->on('talent_wins');
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
        Schema::dropIfExists('sub_talentwins');
    }
}
