<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Traits\ImageUploadTrait;

class PostController extends Controller
{
    use ImageUploadTrait;

    public $post;

    public function __construct(Post $post){
        $this->post=$post;
    }
    
    public function index()
    {
        return view('index', ['posts' => $this->post::with('user:id,name')->approved()->paginate(2)]);
    }

    public function getByCategory($id)
    {
        $posts = $this->post::with('user:id,name')->whereCategoryId($id)->approved()->paginate(2);

        return view('index',compact('posts'));
    }
    

    public function search(Request $request)
    {
        // $posts = $this->post->where('body','LIKE','%'.$request->keyword.'%')->with('user:id,name')->approved()->paginate(10);
        $posts = Post::where('title', 'like',"%{$request->keyword}%")->paginate(3);

        return view('index',compact('posts'));
    }

    public function store(Request $request)
    {
        if($request->hasFile('image')){
           $image_name = $this->uploadImage($request->image);
        }

        $request->user()->posts()->create($request->all() + ['image_path' => $image_name ?? 'default.jpg']);

        return back()->with('success', 'تم الحفظ بنجاح');
    }

    public function create(){
        return view('post.create');
    }

    public function edit($id)
    {
        $post = $this->post::find($id);//find لايجاد السجل المطلوب
        abort_unless(auth()->user()->can('edit-post',$post), 403);
            return view('post.edit',compact('post'));
        
        
    }

    public function update(Request $request ,$id)
    {
        if($request->hasFile('image')){
             $request->user()->posts()->find($id)->update($request->all()+['image_path'=>$this->uploadImage($request->image)]);
        }else{
            $request->user()->posts()->find($id)->update($request->all());
        }
            return back()->with('success','تم التعديل بنجاح'); 
          
    }
    
    public function show($id){
        $post = $this->post::find($id);
        return view('post.show',compact('post'));
    }
}
