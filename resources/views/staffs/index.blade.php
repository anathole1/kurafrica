@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Staff</li>
      </ol>
    </nav>
    <div class="row">
      
        @if (count($staffs) > 0)
            @foreach ($staffs as $staff)
                <div class="col-sm-3">
                    <div class="card shadow-sm mb-2">
                      
                      <div class="card-body">
                        <img src="storage/cover_images/{{$staff->image}}" alt="" class="rounded-circle img-thumbnail">
                        <h4 class="text-secondary">{{$staff->empname}}</h4>
                        <h6>{{$staff->position}}</h6>
                        <p>Join On: {{$staff->created_at}}</p>
                      </div>
                    </div>
                </div>
            @endforeach
        @endif
      
    </div>
  </div>
  
@endsection