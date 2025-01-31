<?php

namespace App\Http\Controllers\Client;

use App\Http\Requests\CartRequest;
use App\Models\ChitietHoadon;
use App\Models\Hoadon;
use App\User;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use App\Models\Sanpham;
use App\Models\Giohang;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    public function addCart($id)
    {
        # code...
        // dd($id);
        $sanpham = Sanpham::find($id);
        Cart::add(['id' => $id, 'name' => $sanpham->ten_sp, 'qty' => 1, 'price' => $sanpham->gia_sp, 'options' => ['img' => $sanpham->img_sp]]);
        return redirect('giohang/show');
    }

    public function showCart()
    {
        $data['tongtien'] = Cart::total();
        $data['carts'] = Cart::content();
        return view('client.giohang', $data);
        // dd($data);
    }

    public function deleteCart($id)
    {
        # code...
        if ($id == 'all') {
            # code...
            Cart::destroy();
            return back();
        } else {
            # code...
            Cart::remove($id);
            return back();
        }
    }

    public function updateCart(Request $request)
    {
        # code...
        Cart::update($request->rowId, $request->qty);
    }

    public function datHang(CartRequest $request)
    {
        $hoadon = new Hoadon();
        $hoadon->email_bill = Auth::user()->email;
        $hoadon->hovaten = $request->name;
        $hoadon->sdt = $request->sdt;
        $hoadon->diachi = $request->address;
        $hoadon->totall = filter_var(Cart::total(), FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $hoadon->date_order = date('Y-m-d  H:i:s');
        $hoadon->note = $request->ghichu;
        $hoadon->status = 0;
        $hoadon->save();
        foreach (Cart::content() as $cart) {
            $sanpham = DB::table('sanpham')->where('ten_sp',$cart->name)->first();
            $chitiet = new ChitietHoadon();
            $chitiet->id_billfk = $hoadon->id_bill;
            $chitiet->id_sanpham = $sanpham->id_sp;
            $chitiet->qty = $cart->qty;
            $chitiet->price = $cart->price;
            $chitiet->save();
        }
        Cart::destroy();        
        return view('client.damuahang');
    }
}
