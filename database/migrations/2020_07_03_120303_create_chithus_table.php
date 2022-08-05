<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChithusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chithu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lichtrinh_id');
            $table->string('name');
            $table->integer('chithu');
            $table->string('ghichu')->nullable();
            $table->timestamps();
        });

        Schema::table('chithu', function($table)
        {
           $table->foreign('lichtrinh_id')
            ->references('id')->on('lichtrinh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chithu');
    }
}
