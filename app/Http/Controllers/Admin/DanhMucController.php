<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddDanhmucRequest;
use App\Http\Requests\EditDanhmucRequest;
use App\Models\Danhmucsp;

class DanhMucController extends Controller
{
    public function getDanhmuc()
    {
        # code...
        $data['listdm'] = Danhmucsp::all();
        return view('admin.category', $data);
    }

    public function postDanhmuc(AddDanhmucRequest $request)
    {
        # code...
        $danhmuc = new Danhmucsp;
        $danhmuc->ten_danhmuc = $request->name;
        $danhmuc->slug_danhmuc = str_slug($request->name);
        $danhmuc->save();
        return back()->with('success','thêm danh mục thành công');
    }

    public function getEditDanhmuc($id)
    {
        # code...
        $data['danhmuc'] = Danhmucsp::find($id);
        return view('admin.editcategory', $data);
    }

    public function postEditDanhmuc(EditDanhmucRequest $request, $id)
    {
        # code...
        $danhmuc = Danhmucsp::find($id);
        $danhmuc->ten_danhmuc = $request->name;
        $danhmuc->slug_danhmuc = str_slug($request->name);
        $danhmuc->save();
        return redirect()->intended('admin/danhmuc')->with('successright','Thay đổi thành công');
    }

    public function getDeleteDanhmuc($id)
    {
        # code...
        Danhmucsp::destroy($id);
        return back()->with('successright','Xóa danh mục thành công');
    }
}
