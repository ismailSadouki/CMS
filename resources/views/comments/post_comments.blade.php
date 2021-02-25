
    
        <div class="card">
            <li class="list-group-item">
                <div class="card-header">
                    <img class="avatar " src="{{ $comment->user->profile->avatar ?? asset('storage/avatars/avatar.jpeg')  }}" alt="">
                    <strong>{{$comment->user->name}}</strong>
                </div>  
                <div class="card-body">
                    {{$comment->body}}
                </div>
            <li class="list-group-item">
        </div>

