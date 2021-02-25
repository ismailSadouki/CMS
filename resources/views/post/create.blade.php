@extends('layouts.app')

@section('content')
    <div class="col-md-8 bg-white">
        <h2 class="my-4">اضف موضوع جديد</h2>
        @include('alerts.success')
        <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <select name="category_id" class="form-control" required>
                    @include('lists.categories')
                </select>
            </div>
            <div class="form-group">
                <input type="text" value="" placeholder="حدد عنوان الموضوع" name="title" required>
            </div>
            <div class="form-group">
                <textarea type="body" class="form-control" name="body" placeholder="محتوي الموضوع" required ></textarea>
            </div>
            <div class="form-group">
                <label for="details">اختر صورة تتعلق بالموضوع</label>
                <img name="image" class="from-controll w-25 h-25" src="">
                <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">ارسل</button>
        </form>
    </div>
    @include('partials.sidebar')
@endsection