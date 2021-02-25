@extends('admin.template')
@section('breadcrumb')
الاحصائيات
@endsection
@section('content')

<div class="row">
  <!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-dark shadow h-100 py-2">
      <div class="card-body">
          <a href="{{route('posts.index')}}">
              <div class="row no-gutters align-items-center text-right">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">المنشورات</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$posts_count}} </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-fw fa-th-list fa-2x text-gray-300"></i>
                  </div>
              </div>
          </a>
      </div>
  </div>
</div>


<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-dark shadow h-100 py-2">
      <div class="card-body">
          <div class="row no-gutters align-items-center text-right">
              <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">ألتصنيفات</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{$categories_count}} </div>
              </div>
              <div class="col-auto">
                  <i class="fas fa-fw fa-list fa-2x text-gray-300"></i>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-dark shadow h-100 py-2">
      <div class="card-body">
          <div class="row no-gutters align-items-center text-left">
              <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">الاعضاء</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"> {{$users_count}}</div>
              </div>
              <div class="col-auto">
                  <i class="fas fa-users fa-fw fa-2x text-gray-300"></i>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-dark shadow h-100 py-2">
      <div class="card-body">
          <div class="row no-gutters align-items-center text-left">
              <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">التعليقات</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"> {{$comments_count}}</div>
              </div>
              <div class="col-auto">
                  <i class="fas fa-angle-right fa-2x text-gray-300"></i>
              </div>
          </div>
      </div>
  </div>
</div>


@endsection