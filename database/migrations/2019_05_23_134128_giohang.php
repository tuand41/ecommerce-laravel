<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Giohang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giohang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cart_tensp');
            $table->integer('cart_soluong');
            $table->integer('cart_thanhtien');
            $table->string('cart_hoten');
            $table->string('cart_email');
            $table->integer('cart_sdt');
            $table->string('cart_diachi');
            $table->integer('cart_idsp')->unsigned();
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
        Schema::dropIfExists('giohang');
    }
}
