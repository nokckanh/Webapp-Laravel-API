<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachhangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->string('CMND')->nullable();
            $table->string('noidon');
            $table->string('noidi');
            $table->timestamps();
        });

        Schema::create('CTchuyendi_khachhang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('khachhang_id');
            $table->unsignedBigInteger('CTchuyendi_id');
            
            $table->timestamps();
        });

        Schema::table('CTchuyendi_khachhang', function($table)
        {
           $table->foreign('khachhang_id')
            ->references('id')->on('khachhang');
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
        Schema::dropIfExists('khachhang');
        Schema::dropIfExists('CTchuyendi_khachhang');
    }
}
