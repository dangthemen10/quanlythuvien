<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQltvNganhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qltv_nganh', function (Blueprint $table) {
            $table->increments('id');
            $table->string('manganh', 20);
            $table->string('tennganh', 500);

            // ccot khoa ngoai
            $table->integer('khoa_id')->unsigned();
            //Tao lien ket khoa ngoai
            $table->foreign('khoa_id')->references('id')->on('qltv_khoa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qltv_nganh');
    }
}
