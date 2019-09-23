<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddforeignkeyHoadonchitietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chitiethoadon', function (Blueprint $table) {
            //        
            $table->foreign('id_billfk')
                  ->references('id_bill')
                  ->on('hoadon')
                  ->onDelete('cascade');
            
            $table->foreign('id_sanpham')
                  ->references('id_sp')
                  ->on('sanpham')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chitiethoadon', function (Blueprint $table) {
            //
        });
    }
}
