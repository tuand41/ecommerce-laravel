<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class HomeController extends Controller
{
    public function getHome()
    {
    	# code...\
        $data['sanpham'] = DB::table('sanpham')->count();
        $data['danhmuc'] = DB::table('danhmucsp')->count();
        $data['com'] = DB::table('comment')->count();
        $data['user'] = DB::table('vp_users')->count();
    	return view('admin.index',$data);
        
    }
}
