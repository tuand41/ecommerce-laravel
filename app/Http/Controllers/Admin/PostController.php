<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\post_request;
use App\Http\Controllers\Controller;
use App\Models\Sanpham;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {   
        $post = Post::all();
        return view('admin.post', compact('post'));
    }


    public function create()
    {
        $product = Sanpham::all();
        return view('admin.addpost', compact('product'));
    }

    public function store(post_request $request)
    {
        $post = new Post;
        $post->name = $request->name;
        $post->description = $request->description;
        $post->img = $request->img->getClientOriginalName();
        $post->content = $request->content;
        $post->product_id = $request->product;
        $post->save();
        $request->img->storeAs('post', $request->img->getClientOriginalName());
        return redirect('admin/post')->with('success','Thêm bài viết thành công');
    }

    public function edit($id)
    {
        # code... 
        $post = Post::find($id);
        $product = Sanpham::all();
        return view('admin.editpost', compact('post','product'));
    }

    public function update(post_request $request, $id)
    {
        $post = Post::find($id);
        $post->name = $request->name;
        $post->description = $request->description;        
        $post->content = $request->content;
        $post->product_id = $request->product;               
        if ($request->hasFile('img')) {
            $post->img = $request->img->getClientOriginalName();
            $request->img->storeAs('post', $request->img->getClientOriginalName());
        }
        $post->save(); 
        return redirect('admin/post')->with('success','Thay đổi bài viết thành công');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('admin/post')->with('success','xoá bài viết thành công');
    }
}
