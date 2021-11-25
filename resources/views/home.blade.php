@extends('layouts.app')
@section('title','Dashboard')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        {{-- <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Hooray! You are welcome, here is one step to go!') }}
                    
                </div>
               
            </div>
            
        </div> --}}
       <div class="col-sm-12">
           @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            
       </div>
        <div class="d-none d-sm-block col-sm-3 bg-main rounded text-white">
         @include('sidebar')
        </div>
        <div class="col-sm-9">
           
            <div class="">
                <h1 class="text-center text-third text-3xl">  {{ __('Hooray! You are welcome, here is one step to go!') }} </h1>
                <div class="py-12">
                    <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg md:max-w-xl mx-2">
                        <div class="md:flex ">
                            <div class="w-full p-4 px-5 ">
                                <div class="flex flex-row">
                                    <h2 class="text-3xl font-semibold">Payment</h2>
                                    <h2 class="text-3xl text-green-400 font-semibold"> Checkout</h2>
                                </div>
                                <div class="flex flex-row text-xs  pb-5"> <span class="font-bold">Information</span><small class="text-gray-400 ml-1">></small> <span class="text-gray-400 ml-1">Payment</span> </div> <span>Customer Information</span>
                                <form action="/successPay" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="userId" value="{{Auth::user()->id}}">
                                <div class="grid md:grid-cols-2 md:gap-2 "> 
                                    <input type="text" name="email" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" value="{{Auth::user()->email}}" readonly> 
                                    <input type="text" name="name" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" value="{{Auth::user()->name}}" readonly> 
                                </div> 
                                <div class="grid md:grid-cols-2 md:gap-2"> 
                                    <div class="">
                                        <select name="level" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" id="exampleFormControlSelect1">
                                            <option>select level</option>
                                            <option value="N1">Nursery 1</option>
                                            <option value="N2">Nursery 2</option>
                                            <option value="N3">Nursery 3</option>
                                            <option value="P1">Primary 1</option>
                                            <option value="P2">Primary 2</option>
                                            <option value="P3">Primary 3</option>
                                            <option value="P4">Primary 4</option>
                                            <option value="P5">Primary 5</option>
                                            <option value="P6">Primary 6</option>
                                            
                                          </select>
                                    </div>
                                    <div class="form-group">
                                        
                                        <input type="text" name="tel" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm @error('tel') is-invalid @enderror" placeholder="Tel* (start with 250..)"> 
                                        @error('tel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div> 
                                <small>This is phone number will be used to correct your money on behalf of kurafrica.</small>
                                <div class="grid md:grid-cols-2 md:gap-2"> 
                                    <input type="text" name="curr" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" value="Rwf" readonly> 
                                    <input type="text" name="amount" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" value="5,000" readonly> 
                                </div> 
                                <div class="grid md:grid-cols-2 md:gap-2">
                                    <label for="" class="px-4 mt-4 text-green-700">Expiration Date</label>
                                    <input type="text" name="exp" class="border rounded h-10 w-full focus:outline-none text-red-500 focus:border-green-200 px-2 mt-2 text-sm" value="{{$date = date('Y-m-d', strtotime('+1 month'));}}" readonly>
                                </div>
                                
                                <p class="text-blue-300"><i class="fa fa-exclamation-triangle"></i> This amount Valid for one month only, on E-library Licence</p>
                                <div class="flex justify-between items-center pt-2"> 
                                    <a href="/" class="h-12 w-24 text-blue-500 text-xs font-medium">Return to Home</a> 
                                    <button type="submit" class="h-12 w-48 rounded font-medium text-xs bg-blue-500 text-white">Pay</button> 
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection
