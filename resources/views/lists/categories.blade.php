<option value="" selected>اختر التصنيف المناسب</option>

@if(!isset($post))
    @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->title}}</option>
    @endforeach
@else
    @foreach ($categories as $category)
        <option value="{{$category->id}}" {{$post->category_id == $category->id ? 'selected' : ''}}>{{$category->title}}</option>
    @endforeach
@endif    