<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichtrinhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichtrinh', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('xe_id');
            $table->string('tuyen_id');
            $table->string('xuatben');
            $table->date('ngaydi');  
            $table->timestamps();
        });

        Schema::table('lichtrinh', function($table)
        {
           $table->foreign('tuyen_id')->references('id')->on('tuyen');
           $table->foreign('xe_id')->references('id')->on('xe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lichtrinh');
    }
}
