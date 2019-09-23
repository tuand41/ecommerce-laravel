<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('id_sp');
            $table->string('ten_sp');
            $table->string('slug_sp');
            $table->integer('gia_sp');
            $table->string('img_sp');
            $table->string('baohanh');
            $table->string('phukien');
            $table->string('tinhtrang');
            $table->string('khuyenmai');
            $table->tinyInteger('status');
            $table->text('mieuta');
            $table->string('manhinh');
            $table->string('hdh');
            $table->string('camtrc');
            $table->string('camsau');
            $table->string('cpu');
            $table->string('ram');
            $table->string('rom');
            $table->string('thenho');
            $table->string('thesim');            
            $table->tinyInteger('sp_noibat');
            $table->integer('sp_danhmuc')->unsigned();
            $table->foreign('sp_danhmuc')
                  ->references('id_danhmuc')
                  ->on('danhmucsp')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('sanpham');
    }
}
