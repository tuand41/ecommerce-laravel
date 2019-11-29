<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddSanphamRequest;
use App\Http\Requests\EditSanphamRequest;
use App\Models\Sanpham;
use App\Models\Danhmucsp;
use DB;

class SanPhamController extends Controller
{
    public function getSanPham()
    {
        # code...
        $data['listsp'] = DB::table('sanpham')->join('danhmucsp', 'sanpham.sp_danhmuc', '=', 'danhmucsp.id_danhmuc')->orderBy('id_sp', 'desc')->get();
        return view('admin.product', $data);
    }

    public function getAddSanPham()
    {
        # code...
        $data['listdanhmuc'] = Danhmucsp::all();
        return view('admin.addproduct', $data);
    }

    public function postAddSanPham(AddSanphamRequest $request)
    {
        # code...
        // return $input = $request->img->getClientOriginalName();
        $sanpham = new Sanpham;
        $sanpham->ten_sp = $request->name;
        $sanpham->slug_sp = str_slug($request->name);
        $sanpham->gia_sp = $request->price;
        $sanpham->img_sp = $request->img->getClientOriginalName();
        $sanpham->phukien = $request->accessories;
        $sanpham->baohanh = $request->warranty;
        $sanpham->khuyenmai = $request->promotion;
        $sanpham->tinhtrang = $request->condition;
        $sanpham->status = $request->status;
        $sanpham->mieuta = $request->description;
        $sanpham->sp_danhmuc = $request->cate;
        $sanpham->sp_noibat = $request->featured;
        $sanpham->manhinh = $request->manhinh;
        $sanpham->hdh = $request->hdh;
        $sanpham->camtrc = $request->camtrc;
        $sanpham->camsau = $request->camsau;
        $sanpham->cpu = $request->cpu;
        $sanpham->ram = $request->ram;
        $sanpham->rom = $request->rom;
        $sanpham->thenho = $request->thenho;
        $sanpham->thesim = $request->thesim;
        $sanpham->save();
        $request->img->storeAs('avatar', $request->img->getClientOriginalName());
        return redirect('admin/sanpham')->with('success', 'Thêm sản phẩm thành công');
    }

    public function getEditSanPham($id)
    {
        # code...
        $data['sanpham'] = Sanpham::find($id);
        $data['danhmuc'] = Danhmucsp::all();
        return view('admin.editproduct', $data);
    }

    public function postEditSanPham(EditSanphamRequest $request, $id)
    {
        # code...
        $sanpham = Sanpham::find($id);
        $sanpham->ten_sp = $request->name;
        $sanpham->slug_sp = str_slug($request->name);
        $sanpham->gia_sp = $request->price;

        $sanpham->baohanh = $request->warranty;
        $sanpham->phukien = $request->accessories;
        $sanpham->tinhtrang = $request->condition;
        $sanpham->khuyenmai = $request->promotion;
        $sanpham->status = $request->status;
        $sanpham->mieuta = $request->description;
        $sanpham->sp_noibat = $request->featured;
        $sanpham->sp_danhmuc = $request->cate;
        $sanpham->manhinh = $request->manhinh;
        $sanpham->hdh = $request->hdh;
        $sanpham->camtrc = $request->camtrc;
        $sanpham->camsau = $request->camsau;
        $sanpham->cpu = $request->cpu;
        $sanpham->ram = $request->ram;
        $sanpham->rom = $request->rom;
        $sanpham->thenho = $request->thenho;
        $sanpham->thesim = $request->thesim;
        if ($request->hasFile('img')) {
            # code...
            $sanpham->img_sp = $request->img->getClientOriginalName();
            $request->img->storeAs('avatar', $request->img->getClientOriginalName());
        }
        $sanpham->save();

        return redirect()->intended('admin/sanpham')
            ->with('success', 'Thay đổi thông tin sản phẩm thành công');
    }

    public function getDeleteSanPham($id)
    {
        # code...
        Sanpham::destroy($id);
        return redirect()->intended('admin/sanpham')->with('success','Xóa sản phẩm thành công');
    }
}
