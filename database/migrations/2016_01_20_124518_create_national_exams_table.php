<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNationalExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('national_exams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('booklet_id')->unsigned();
            $table->foreign('booklet_id')->references('id')->on('booklets');
            $table->integer('qnumber');
            $table->string('question');
            $table->boolean('has_fig')->default(false);
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
        Schema::drop('national_exams');
    }
}   