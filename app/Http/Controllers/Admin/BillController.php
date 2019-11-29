<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hoadon;

class BillController extends Controller
{
    public function getBill()
    {   
        $bill = Hoadon::all();
        return view('admin.bill', compact('bill'));
    }
}
