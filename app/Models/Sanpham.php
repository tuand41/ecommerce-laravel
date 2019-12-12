<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    protected $table = 'sanpham';
    protected $primaryKey = 'id_sp';
    protected $guarded = [];

    public function getID(){
        return $this->id_sp;
    }

    /**
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->primaryKey;
    }

    public function post()
    {
        return $this->hasMany('App\Post', 'product_id');
    }

    public function billdetail()
    {
        return $this->hasMany(ChitietHoadon::class,'id_sanpham');
    }
}
