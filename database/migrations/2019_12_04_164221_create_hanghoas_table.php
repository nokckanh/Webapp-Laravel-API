<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHanghoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('hanghoa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tennguoigui')->nullable();
            $table->string('sdtnguoigui')->nullable();
            $table->string('tennguoinhan');
            $table->string('sdtnguoinhan');
            $table->string('loaihang');
            $table->string('noiden');
            $table->string('trangthai');
            $table->string('Giacuoc');
            $table->timestamps();
        });

        Schema::create('CTchuyendi_hanghoa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hanghoa_id');
            $table->unsignedBigInteger('CTchuyendi_id');
            
            $table->timestamps();
        });

        Schema::table('CTchuyendi_hanghoa', function($table)
        {
           $table->foreign('hanghoa_id')
            ->references('id')->on('hanghoa');
            $table->foreign('CTchuyendi_id')
            ->references('id')->on('CTchuyendi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hanghoa');
        Schema::dropIfExists('CTchuyendi_hanghoa');
    }
}
