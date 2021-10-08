@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Create Staff</li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-12 ">

      {!! Form::open(['action' => 'App\Http\Controllers\StaffController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
          <div class="form-group">
              {{Form::label('name','Name:')}}
              {{Form::text('name','',['class' => 'form-control', 'placeholder' => 'Enter Names here'])}}
          </div>
          <div class="form-group">
          {{Form::label('post','Position:')}}
              {{Form::text('post', '',['class' => 'form-control','placeholder' => 'Enter your Position'])}}
          </div>
          <div class="form-group">
              {{Form::file('image')}}
          </div>
              {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
      {!! Form::close() !!}
    </div>
  </div>
</div>

@endsection