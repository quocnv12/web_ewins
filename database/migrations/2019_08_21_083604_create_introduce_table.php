<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntroduceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('introduce', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('content');
            $table->text('sammary');
            $table->string('slug');
            $table->string('image');
            $table->string('video');
            $table->string('nams');
            $table->string('thanhlap');
            $table->string('phantram');
            $table->string('noidungphantram');
            $table->string('doitac');
            $table->string('noidungdoitac');
            $table->string('nhanvien');
            $table->string('noidungnhanvien');
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
        Schema::dropIfExists('introduce');
    }
}
