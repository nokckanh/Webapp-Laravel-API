<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xe', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nhaxe_id');
            $table->string('seats');
            $table->string('BSX');
            $table->string('phonecar');
            $table->timestamps();
            
        });

        Schema::table('xe', function($table)
        {
            $table->foreign('nhaxe_id')
            ->references('id')->on('nhaxe')
            ->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xe');
    }
}
