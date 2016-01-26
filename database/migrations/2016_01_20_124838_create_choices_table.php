<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('national_exam_id')->unsigned();
            $table->foreign('national_exam_id')->references('id')->on('national_exams')->onDelete('cascade');
            $table->boolean('has_fig')->default(false);
            $table->char('cnumber', 1);
            $table->string('choice')->nullable();
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
        Schema::drop('choices');
    }
}

