<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubELearningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_e_learning', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cate_id')->unsigned();
            $table->string('name');
            $table->foreign('cate_id')->references('id')->on('e_learning')->onDelete('cascade');
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
        Schema::dropIfExists('sub_e_learning');
    }
}
