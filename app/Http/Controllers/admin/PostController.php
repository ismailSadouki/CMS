<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct(Post $post)
    {
        $this->post=$post;
    }

    public function index()
    {
        $posts = $this->post::with('user','category')->paginate(10);

        return view('admin.posts.all',compact('posts'));
    }

    public function edit($id)
    {
        $post = $this->post::find($id);

        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request,$id)
    {
        $request['approved'] = $request->has('approved');

        $this->post->find($id)->update($request->all());

        return back()->with('success','تم تحديث المنشور');
    }
  

    //
    public function updateApproved(Request $request ,$id)
    {
       
        // $request->user()->posts()->find($id)->update($request->all());

        // return back()->with('success','تم التعديل بنجاح');
    }
    public function destroy($id)
    {
        $this->post::find($id)->delete();
        return back();
    }

}
