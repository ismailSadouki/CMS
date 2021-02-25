@extends('layouts.app')

@section('content')
    <div class="container text-muted">
        <div class="row bg-white p-3 mb-4">
            <div class="col-md-3 text-center">
                <img src="{{optional($contents->profile)->avatar ?? asset('storage/avatars/avatar.jpeg') }}" alt="" class="profile mb-2">
            </div>
            <div class="col-md-9 text-md-right text-center">
                <h2>{{$contents->name}}</h2>
                <p class="word-break">{{optional($contents->profile)->bio}}</p>
                <a href="">{{optional($contents->profile)->website}}</a>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-md-12">
                <ul class="nav nav-tabs mb-3">
                    <li class="nav-item">
                        <a href="{{route('profile',$contents->id)}}"  class="nav-link {{$contents->relationLoaded('posts') ? 'active' : ''}}">المشاركات</a>
                    </li>
                    <li class="nav-item">
                        <a href="/user/{{$contents->id}}/comments" class="nav-link {{$contents->relationLoaded('comments') ? 'active' : ''}}">التعليقات</a>    
                    </li>
                </ul>
                @if($contents->relationLoaded('posts'))
                      @include('user.posts_section')
                @else    
                      @include('user.comments_section')  
                @endif   
                
            </div>
        </div>
    </div>
@endsection