@extends('layouts.app')

@section('content')
<div class="col-md-8 bg-white">
       <h2 class="my-4"> المنشورت </h1>

        @if($posts->count())
            @foreach ($posts as $post)
                <div class="card mb-4">
                    <img class="card-img-top" src="{{$post->image_path}}" alt="">
                    <div class="card-body">
                        <h3 class="card-title">{{$post->title}}</h3>
                        <p class="card-text">{{\Illuminate\Support\Str::limit($post->body, 200)}}</p>
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">المزيد</a>
                    </div>    
                    <div class="card-footer text-muted">
                        {{$post->created_at->diffForHumans()}}
                    بواسطة <a href="{{route('profile',$post->user->id) }}">{{$post->user->name}}</a>
                    </div>
                </div>
           @endforeach
        @else 
             <h3 style="margin:0 auto">لا نتائج</h3>  
        @endif
        
        
        {{-- Pagination  --}}
        <ul class=" pagination justify-content-center mb-4">
            
            {{$posts->links("pagination::bootstrap-4")}}
           
        </ul>


</div>
@include('partials.sidebar')
@endsection 