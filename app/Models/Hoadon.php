<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hoadon extends Model
{
    //
    protected $table = 'hoadon';
    protected $primaryKey = 'id_bill';
    protected $guarded = [];

    public function detail()
    {
        return $this->hasMany(ChitietHoadon::class,'id_billfk');
    }

}
