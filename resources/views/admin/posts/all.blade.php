@extends('admin.template')

@section('breadcrumb')
    المنشورات
@endsection
@section('content')
    <div class="container">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> المنشورات
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTable" width="100%" cellspacing="0" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>الرقم</th>
                                <th>العنوان</th>
                                <th>الاسم اللطيف</th>
                                <th>المحتوى</th>
                                <th>الكاتب</th>
                                <th>نشر</th>
                                <th>التصنيف</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->slug}}</td>
                                    <td>{{\Illuminate\Support\Str::limit($post->body,100)}}</td>
                                    <td>{{$post->user->name}}</td>
                                    
                                    <td>

                                        <input type="checkbox" name="approved" value="{{$post->approved}}" {{$post->approved ? 'checked' : '' }}>
  
                                    </td>
                                
                                    <td>{{$post->category->title}}</td>
                                    <td>
                                        <a href="{{route('posts.edit', $post->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                              </svg>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{route('posts.destroy',$post->id)}}" method="post">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-link"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                              </svg></button>
                                        </form>
                                    </td>
                                </tr>
                                
                            @endforeach
                            <ul class=" pagination justify-content-center mb-4">
            
                                {{$posts->links("pagination::bootstrap-4")}}
                               
                            </ul>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">

            </div>
        </div>
    </div>
@endsection