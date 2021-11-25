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
           <div class="col-sm-12">
            
            {{-- {{DB::table('payments')->where('expiration','>',date("Y-m-d"))->get()}} --}}
           {{-- {{$users = DB::table('payments')
            ->where('userId', '=', Auth::user()->id)
            ->where('expiration', '>', date("Y-m-d") )
            ->count();
            }} --}}
            
             
              <div class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-2 max-w-6xl">
                @foreach ($books as $book)
                    @if (DB::table('payments')
                    ->where('userId', '=', Auth::user()->id)
                    ->where('expiration', '>', date("Y-m-d") )
                    ->count() > 0)
                        <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5">
                            <a href="#">
                                <img src="storage/cover_images/{{$book->cover}}" alt="{{$book->name}}" class="img-thumbnail w-100">
                            </a>
                            <div class="p-2">
                                <a href="#">
                                    <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">{{$book->bookname}}-{{$book->author}}</h5>
                                </a>
                                <p class="font-normal text-gray-700 mb-3">Summary</p>
                                <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="#">
                                    View
                                </a>
                            </div>
                        </div>
                    @else
                        <span class="badge badge-danger">You are note suscribe to any level</span>
      
                    @endif
                
                @endforeach
            </div>
              
           </div>
       </div>
   </div>
@endsection