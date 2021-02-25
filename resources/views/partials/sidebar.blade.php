<!-- Sidebar Widgets Column -->
<div class="col-md-4">
    <!-- Categories Widget -->
    <div class="card">
        <h5 class="card-header">التصنيفات</h5>
        <div class="card-body">
            <ul class="nav flex-column">
                @foreach ($categories as $category)
                    <li class="nav-item">
                        <a href="/{{$category->id}}/{{$category->slug}}" class="nav-link">{{$category->title}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4 text-right">
        <h5 class="card-header">آخر التعليقات</h5>
            <ul class="list-group p-0">
            @foreach ($recent_comments as $comment)
                <li class="list-group-item">
                    <img src="{{ $comment->user->profile->avatar ?? asset('storage/avatars/avatar.jpeg') }}" alt="" class="avatar">
                    <a href="{{route('post.show',$comment->posts->id)}}">{{\Illuminate\Support\Str::limit($comment->body,30)}}</a>
                </li>
            @endforeach
           
            </ul>   
    </div>
</div>