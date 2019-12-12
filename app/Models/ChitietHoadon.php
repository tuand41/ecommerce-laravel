<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChitietHoadon extends Model
{
    //
    protected $table = 'chitiethoadon';
    protected $primaryKey = 'id_billdetail';
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Sanpham::class,'id_sanpham');

    }

    public function bill()
    {
        return $this->belongsTo(Hoadon::class,'id_billfk');
    }
}
