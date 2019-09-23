<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('id_com');
            $table->string('com_email');
            $table->string('com_ten');
            $table->string('com_noidung');
            $table->integer('com_sp')->unsigned();
            $table->foreign('com_sp')
                  ->references('id_sp')  
                  ->on('sanpham')
                  ->onDelete('cascade');            
            $table->timestamps();
        });
        Schema::table('comment', function (Blueprint $table) {            
            $table->string('com_email')->unique();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
}
