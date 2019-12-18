<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ChitietHoadon;
use App\Models\Hoadon;

class BillController extends Controller
{
    public function getBill()
    {   
        $bill = Hoadon::all();
        return view('admin.bill', compact('bill'));
    }

    public function deleteBill($id)
    {
        Hoadon::destroy($id);
        return back();
    }

    public function showBill($id)
    {
        $details = ChitietHoadon::with('product')->where('id_billfk',$id)->get();
        return view('admin.showbill',compact('details'));
    }
}
