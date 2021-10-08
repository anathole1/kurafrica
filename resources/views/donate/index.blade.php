@extends('layouts.app')
@section('content')
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-12">
               <div class="table-responsive">
                   <table class="table">
                       <thead class="table-dark">
                            <th>Donor</th>
                            <th>Email</th>
                            <th>Phone N<sup>o</sup></th>
                            <th>Donation</th>
                            <th>Date</th>
                       </thead>
                       <tbody>
                            @if(count($donates) > 0 )
                                @foreach ($donates as $donate)
                                    <tr>
                                        <td>{{$donate->names}}</td>
                                        <td>{{$donate->email}}</td>
                                        <td>{{$donate->tel}}</td>
                                        <td>{{$donate->type}}</td>
                                        <td>{{$donate->created_at}}</td>
                                    </tr>
                                @endforeach
                                @endif
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
   </div>
@endsection