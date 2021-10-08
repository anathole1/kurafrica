@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
               <h2 class="text-main">"Every child is special!"</h2>  
             <p class="text-third" style="font-style: italic">Through your support, their personal power discovery is guaranteed.</p>
            <small> Donating to help one who can't afford this course is to help a family and nation.</small>
                <p style="text-transform:uppercase; text-shadow: 2px 2px #ebc0c0; font-weight:bold">not only money but also ideas, mentoring, or any other thing.</p>
                <p>warm welcome.</p>
                <p>+250788290064/+250780595922</p>
                <div class="row">
                    <div class="col-6">
                        <img src="../storage/images/momo.png" alt="" class="img-fluid">
                    </div>
                    {{-- <div class="col-6">
                        <img src="storage/images/airtel.jfif" alt="" class="img-fluid">
                    </div> --}}
                    <div class="col-6">
                        <img src="../storage/images/visa master.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-12 bg-main rounded">
                    <h2 class="text-center p-2 text-light">CHARITY DONATION FORM</h2>
                </div>
                {!! Form::open(['action' => 'App\Http\Controllers\donateController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    @csrf
                <div class="form-group">
                    {{Form::label('names','Names:')}}
                    {{Form::text('names','',['class' => 'form-control', 'placeholder' => 'Enter Names here'])}}
                </div>
                <div class="form-group">
                {{Form::label('email','Email:')}}
                    {{Form::text('email', '',['class' => 'form-control','placeholder' => 'Enter your email'])}}
                </div>
                <div class="form-group">
                {{Form::label('tel','Telephone:')}}
                    {{Form::text('tel', '',['class' => 'form-control','placeholder' => 'Enter your Phone'])}}
                </div>
                <div class="form-group">
                {{Form::label('type','Donation Amount:')}}
                    {{Form::text('type', '',['class' => 'form-control','placeholder' => 'Enter your donation'])}}
                </div>
                
                {{-- <div class="form-group">
                    {{Form::file('image')}}
                </div> --}}
                    {{Form::submit('Donate',['class' => 'btn bg-main text-fith'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection