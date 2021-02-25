@includeWhen(!count($contents->posts),'alerts.empty',['msg'=>'لا توجد اي مشاركات بعد'])
<div class="row mb-2">
    @foreach ($contents->posts  as $post)
        <div class="col-lg-3 col-md-4 md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('post.show', $post->id) }}">{{$post->title}}</a></h5>
                </div>
                <div class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle link btn btn-primary">
                    المزيد
                    </a>
                    <div class="dropdown-menu">
                        @can('edit-post', $post)
                        <a href="{{route('post.edit',$post->id)}}" class="dropdown-item">تعديل</a>
                        @endcan
                        @can('delete-post', $post)

                        <form action="{{route('posts.destroy',$post->id)}}" method="post" class="dropdown">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn ">حذف </button>
                        </form>
                        @endcan
                    </div>
                </div>
            </div>
            
        </div>
    @endforeach
</div>