<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQltvThuthuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qltv_thuthu', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('mathuthu',50);
            $table->string('tenthuthu', 200);
            $table->string('chucvu', 200);
            $table->string('bomon',200);
            $table->string('khoa',200);
            $table->string('gioitinh',200);
            $table->string('namsinh',200);
            $table->string('diachi',500);
            $table->string('sdt',25);
            $table->string('email',200);
            $table->string('quequan',200);
            $table->text('anh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qltv_thuthu');
    }
}
