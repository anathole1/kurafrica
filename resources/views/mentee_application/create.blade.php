@extends('layouts.app')
@section('title','Kurafrica | Mentee_Application')
@section('content')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Mentee Application Portal</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active"><a href="#">Mentee Application</a></li>
      </ol>
    </div>
  </div>
</div>
    <div class="container">
        <div class="row">
          
            <div class="col-sm-9">
                <div class="card card-shadow">
                    <div class="card-body">
                      {{-- App\Http\Controllers\menteeApplicationController@store --}}
                        {{-- <form action="mentee_application" method="POST" enctype="multipart/form-data"> --}}
                           {{-- @csrf --}}
                           {!! Form::open(['action' => 'App\Http\Controllers\menteeApplicationController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <small class="text-success">Parent Info</small>
                            <hr>
                            <div class="form-row">
                              <div class="form-group col-md-4">
                                {{Form::label('pname','Parent Name:')}}
                                {{Form::text('pname','',['class' => 'form-control', 'placeholder' => 'Enter parent name here'])}}
                                {{-- <label for="parent">Parent name</label>
                                <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter Parent/Guardian name"> --}}
                              </div>
                              <div class="form-group col-md-4">
                                {{-- {{Form::label('title','Title:')}}
                                {{Form::select('title', array('Mr' => 'Mr', 'Miss' => 'Miss'),['class' => 'form-control'])}} --}}
                                <label for="title">Title</label>
                                <select id="inputState" class="form-control" name="title">
                                    
                                    <option value="Mr">Mr</option>
                                    <option value="Miss">Miss</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="none">other</option>
                                  </select>
                              </div>
                              <div class="form-group col-md-4">
                                  <label for="address">Home address</label>
                                  <input type="text" class="form-control" name="address" placeholder="Enter your home address">
                              </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="tel">Tel</label>
                                    <input type="text" class="form-control" name="tel" placeholder="Enter your phone number">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email">
                                    <small id="emailHelp" class="form-text text-muted ">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="availability">Parent availability time</label>
                                    <input type="time" name="av_time" id="av_time" class="form-control">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="time">Best time to call</label>
                                    <input type="time" name="b_time" id="b_time" class="form-control">
                                </div>
                            </div>
                            <small class="text-success">Children Info</small>
                            <hr >
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                 <label for="name" class="text-primary">Child Name</label>
                                 <input type="text" class="form-control" name="c_name" id="c_name">
                               </div>
                               <div class="form-group col-md-6">
                                 <label for="db" class="text-primary">Date of Birth</label>
                                 <input type="date" name="dob" id="dob" class="form-control">
                               </div>
                           </div>
                           <div class="form-row">
                             <div class="form-group col-md-6">
                              {{-- <div class="form-group col-md-4"> --}}
                                <label for="choose" class="text-primary">Kind of facilitation</label>
                               <div class="form-check">
                                <label><input type="checkbox" name="category[]" value="Coaching only"> Coaching only</label>  <br>
                                <label><input type="checkbox" name="category[]" value="Coaching with mentorship"> Coaching with mentorship</label>
                                <label><input type="checkbox" name="category[]" value="Coaching with lending books"> Coaching with lending books</label>
                                <label><input type="checkbox" name="category[]" value="Coaching with access to E-library"> Coaching with access to E-library</label>
                                <label><input type="checkbox" name="category[]" value="Mentorship,coaching,lending books with access to E-library"> Mentorship,coaching,lending books with access to E-library</label>
                               </div>
                              {{-- </div> --}}
                             </div>
                             <div class="form-group col-md-6">
                              <label for="choose" class="text-primary">Child availability</label>
                                <div class="form-check">
                                <label><input type="checkbox" name="availability[]" value="After usual class"> After usual class </label> <br>
                                <label><input type="checkbox" name="availability[]" value="Weekend"> Weekend</label> <br>
                                <label><input type="checkbox" name="availability[]" value="Both after usual class and weekend"> Both after usual class and weekend</label>
                              </div>
                           </div>
                           </div>
                           <div class="form-row">
                             <div class="form-group col-md-3">
                                <label for="choose" class="text-primary">Perfect program time</label>
                                <div class="form-check">
                                  <label><input type="checkbox" name="prtime[]" value="6:00PM-7:00PM"> 6:00PM-7:00PM </label> <br>
                                  <label><input type="checkbox" name="prtime[]" value="7:00PM-8:00PM"> 7:00PM-8:00PM</label> <br>
                                </div>
                             </div>
                             <div class="form-group col-md-3">
                              <label for="name" class="text-primary">current school</label>
                              <input type="text" class="form-control" name="c_school" id="c_school">
                             </div>
                             <div class="form-group col-md-3">
                              <label for="name" class="text-primary">Academic year</label>
                              <input type="text" class="form-control" name="ac_year" id="ac_year">
                             </div>
                             <div class="form-group col-md-3">
                              <label for="name" class="text-primary">expectations</label>
                              <input type="text" class="form-control" name="expectations" id="expectations">
                             </div>
                           </div>
                           <small class="text-fourth">CERTIFICATION</small>
                            <p>
                              I certify that to the best of my knowledge the information given on this form is true, complete and accurate and no information requested or other material information has been omitted and if I am admitted to the KURAFRICA I will send it.
                              </p>
                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                          {{-- </form> --}}
                          {!! Form::close() !!}
                    </div>
                </div>
                
            </div>
            <div class="col-sm-3">
              <img src="../storage/images/open.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
@endsection