@extends('layouts.app')

@section('content')
    <div class="col-md-8 bg-white">
        <h2 class="my-4">تعديل المنشور</h2>
        @include('alerts.success')
        <form action="{{route('post.update',$post->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group">
                <select name="category_id" class="form-control">
                    @include('lists.categories')
                </select>
            </div>
            <div class="form-group">
                <input type="text" value="{{$post->title}}" placeholder="حدد عنوان الموضوع" name="title">
            </div>
            <div class="form-group">
                <textarea type="body" class="form-control" name="body" placeholder="محتوي الموضوع"  >{{$post->body}}</textarea>
            </div>
            <div class="form-group">
                <label for="details">اختر صورة تتعلق بالموضوع</label>
                <img name="image" class="from-controll w-25 h-25" src="{{$post->image_path}}">
                <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">تعديل</button>
        </form>
    </div>

    @include('partials.sidebar')

@endsection