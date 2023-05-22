<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Blocks',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('BlockName',50);
            $table->string('Info',50);
            $table->integer('TopicId')->unsigned();
            $table->foreign('TopicId')->references('id')->on('Topics')->onDelete('cascade');
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
        Schema::drop('Blocks');
    }
};
