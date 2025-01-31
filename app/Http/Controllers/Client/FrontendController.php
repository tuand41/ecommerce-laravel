<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sanpham;
use App\Models\Danhmucsp;
use App\Models\Comment;
use App\Models\Post;
use DB;
use Auth;

class FrontendController extends Controller
{
    public function getHome()
    {
    	# code...
    	$data['sanpham'] = Sanpham::where('sp_noibat','1')->orderBy('id_sp','desc')->take(8)->get();
    	$data['news'] = Sanpham::orderBy('id_sp','desc')->take(8)->get();
    	
		return view('client.index',$data);
		// dd($data['news']);
    }

    public function getDetail($id)
    {
    	# code...
        $data['comments'] = Comment::where(['com_sp' => $id, 'type' => 0])->orderBy('id_com','desc')->paginate(3);
    	$data['sanpham1'] = Sanpham::find($id);
    	$data['danhmuc1'] = DB::table('danhmucsp')
            ->join('sanpham','danhmucsp.id_danhmuc','=','sanpham.sp_danhmuc')
            ->where('sanpham.id_sp','=',Sanpham::find($id)->id_sp)->first();
		return view('client.detail',$data);
    }
    public function postCom(Request $request,$id)
    {
    	# code...
    	$comment = new Comment;    	
    	$comment->com_email = Auth::user()->email;
    	$comment->com_name = Auth::user()->name;
    	$comment->com_noidung = $request->contents;
		$comment->com_sp = $id;
		$comment->type = 0;
    	$comment->save();
    	return back(); 	
    }

    public function getDanhmuc($id)
    {
    	# code...
    	$data['tendanhmuc'] = Danhmucsp::find($id);
    	$data['hieu'] = Sanpham::where('sp_danhmuc',$id)->paginate(8);
    	return view('client.danhmuc',$data);
	}
	public function getSearch(Request $request )
	{
		# code...
		$ketqua = $request->result;
	
        $data['key'] = $ketqua;
        $ketqua = str_replace('', '%', $ketqua);
        $data['sanpham'] = Sanpham::where('ten_sp','like','%'.$ketqua.'%')->paginate(8);
        return view('client.timkiem',$data);
        // dd($data['key']);        
	}
	public function getPost()
	{
		$post = Post::with('product')->orderBy('id','desc')->get();
		return view('client.tintuc', compact('post'));
	}

	public function showPost($id)
	{
		# code...
		$post = Post::find($id);
        $comments = Comment::where(['post_id' => $id, 'type' => 1])->orderBy('id_com','desc')->paginate(3);

		return view('client.tintuc-chitiet',compact('post','comments'));
		
	}
	
	public function commentPost(Request $request,$id)
    {
    	# code...
    	$comment = new Comment; 	
    	$comment->com_email = Auth::user()->email;
    	$comment->com_name = Auth::user()->name;
    	$comment->com_noidung = $request->contents;
		$comment->post_id = $id;
		// $comment->com
		$comment->type = 1;
    	$comment->save();
    	return back(); 	
    }
}
