@extends('layouts.app')
@section('title','E-Library')
@section('content')
   <div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">E-library</li>
        </ol>
    </nav>
       <div class="row">
           <div class="col-sm-6">
               <h1 class="font-second text-fourth">Available Books</h1>
               {{-- <div class="card">
                   <div class="card-body"> --}}
                       <div class="row">
                         
                           <div class="col-sm-3">
                               <img src="{{asset('images/abc.jpg')}}" alt="Moana" class="img-fluid inner-img">
                           </div>
                           <div class="col-sm-9">
                            <h3 class="font-second">Letter ABC</h3>
                            
                            <small class="font-second"> An alphabet book is a book primarily designed for young children. 
                                It presents letters of the alphabet with corresponding words and/or images. 
                                Some alphabet books feature capitals and lower case letter…</small>
                                <a href="elibrary/id=1" class="btn btn-danger font-second" data-toggle="modal" data-target="#elibraryModal">Enroll</a>
                           </div>
                       </div>
                      <hr> 
                       <div class="row">
                         
                           <div class="col-sm-3">
                               <img src="{{asset('images/moana.jfif')}}" alt="Moana" class="img-fluid inner-img">
                           </div>
                           <div class="col-sm-9">
                            <h3 class="font-second">Moana</h3>
                            
                            <small class="font-second"> is a 2016 American 3D computer-animated musical adventure comedy 
                                film produced by Walt Disney Animation Studios and distributed by Walt Disney Pictures.
                                 The 56th Disney animated feature film, the film is directed by Ron Clements and John Musker,
                                  and co-directed by Don Hall and Chris Williams, 
                                the film introduces Auliʻi Cravalho as Moana and features the voices of Dwayne …</small>
                                <a href="elibrary/id=1" class="btn btn-danger font-second" data-toggle="modal" data-target="#elibraryModal">Enroll</a>
                           </div>
                       </div>
                      <hr> 

{{-- Modal  --}}
<!-- Modal -->
<div class="modal fade" id="elibraryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-second" id="exampleModalLabel">Checkout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger font-second">Confirm Checkout</button>
        </div>
      </div>
    </div>
  </div>
{{-- //Modal --}}


                       <div class="row">
                         
                           <div class="col-sm-3">
                               <img src="{{asset('images/mrfox.jfif')}}" alt="Moana" class="img-fluid inner-img">
                           </div>
                           <div class="col-sm-9">
                            <h3 class="font-second">Fantastic Mr Fox</h3>
                            
                            <small class="font-second"> is a children's novel written by British author Roald Dahl. It was published in 1970, by George Allen & Unwin in 
                                the UK and Alfred A. Knopf in the U.S., with illustrations by Donald C…</small> 
                                <a href="elibrary/id=2" class="btn btn-danger font-second" data-toggle="modal" data-target="#elibraryModal">Enroll</a>
                           </div>
                       </div>
                      <hr> 
                   {{-- </div>
               </div> --}}
           </div>
           <div class="col-sm-6">
               <h1 class="text-eigth text-center font-second">Your Books</h1>
           </div>
       </div>
   </div>
@endsection