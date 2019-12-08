<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        $post = new Post;
        $post->name = $request->name;
        $post->description = $request->description;
        $post->img = $request->img->getClientOriginalName();
        $post->content = $request->content;
        $post->product_id = $request->product;
        $post->save();
        $request->img->storeAs('post', $request->img->getClientOriginalName());
        return redirect('admin/post');
    }

    public function edit($id)
    {
        # code... 
        $post = Post::find($id);
        $product = Sanpham::all();
        return view('admin.editpost', compact('post','product'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->name = $request->name;
        $post->description = $request->description;
        $post->img = $request->img->getClientOriginalName();
        $post->content = $request->content;
        $post->product_id = $request->product;
        $post->save();
        $request->img->storeAs('post', $request->img->getClientOriginalName());
        return redirect('admin/post');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('admin/post');
    }
}
