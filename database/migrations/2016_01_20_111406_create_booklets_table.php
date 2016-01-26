<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booklets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('booklet_code', 10);
            $table->string('subject_code', 2);
            $table->integer('number_of_items');
            $table->float('time_allowed');
            $table->integer('year');
            $table->integer('grade');
            $table->string('subject', 10);
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
        Schema::drop('booklets');
    }
}
