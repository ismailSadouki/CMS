@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="content bg-white p-5">
            <h2 class="my-4">
                {{$post->title}}
            </h2>
            <img class="card-img-top mb-4" src="{{$post->image_path}}" alt="">
            {{$post->body}}
           
            {{-- Comments form  --}}
                <div class="row form-group mt-5">
                    <div class="col-lg-11 col-md-6 col-xs-11">
                            <h3>التعليقات :</h3>
                            <form action="{{route('comment.store')}}" id="comments" method="post">
                                @csrf
                                <div class="form-group">
                                    <textarea name="body" rows="5" class="form-control" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" >تعليق</button>
                                <input type="hidden" name="post_id" value="{{$post->id}}">
                            </form>
                    </div>
                </div>
                <div id="comments" class="word-break container mt-5">
                    @foreach ($post->comments as $comment)
                        @include('comments.post_comments')
                    @endforeach
                </div>                                                                                                                          
        </div>
    </div>

    


    @include('partials.sidebar')
@endsection