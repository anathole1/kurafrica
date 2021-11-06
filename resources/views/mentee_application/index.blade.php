@extends('layouts.app')
@section('title','Kurafrica | Mentee_Application')
@section('content')
   <div class="container-fluid">
       <div class="row">
           <div class="col-sm-12">
               <div class="table-responsive">
                <table class="table">
                    <thead class="bg-main">
                      <tr>
                        <th scope="col">P. Name <br> Contact</th>
                        {{-- <th scope="col">Title</th> --}}
                        <th scope="col">P. Info</th>
                        <th scope="col">PAT / BTC</th>
                        <th scope="col">C. Name / School</th>
                        <th scope="col">D.O.B</th>
                        <th scope="col">Category</th>
                        <th scope="col">Availability</th>
                        <th scope="col">Program Time</th>
                        <th scope="col">Exceptions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if (count($applications) > 0)
                            @foreach ($applications as $application)
                                <tr>
                                    <th scope="row">{{$application->pname}} / {{$application->title}} <br>{{$application->tel}}</th>
                                    {{-- <td>{{$application->title}}</td> --}}
                                    <td>{{$application->address}}<br>{{$application->email}}</td>
                                    <td>{{$application->p_av_time}}<br>{{$application->b_time_call}}</td>
                                    <td>{{$application->child_name}} / {{$application->c_school}}</td>
                                    <td>{{$application->dob}}</td>   
                                    <td>{{$application->facility}}</td>   
                                    <td>{{$application->availability}}</td>   
                                    <td>{{$application->program_time}}</td>   
                                    <td>{{$application->expections}}</td>   
                            @endforeach
                        @endif
                    </tbody>
                  </table>
               </div>
            
           </div>
       </div>
   </div>
@endsection