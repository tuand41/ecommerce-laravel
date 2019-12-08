<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo('App\Sanpham','product_id');
    }
}
