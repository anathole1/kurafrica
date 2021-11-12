@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
           <h2 class="text-3xl p-2 px-2 py-2 shadow-lg">Dashboard</h2>
        </div>
        <div class="col-sm-8">
           
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
                                <div class="relative "> 
                                    <input type="text" name="email" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" value="{{Auth::user()->email}}" readonly> 
                                </div> 
                                <div class="grid md:grid-cols-2 md:gap-2"> 
                                    <input type="text" name="name" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" value="{{Auth::user()->name}}" readonly> 
                                    <input type="text" name="tel" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="Tel* (start with 250..)"> 
                                    
                                </div> 
                                <small>This is phone number will be used to correct your money on behalf of kurafrica.</small>
                                <div class="grid md:grid-cols-2 md:gap-2"> 
                                    <input type="text" name="name" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" value="Rwf" readonly> 
                                    <input type="text" name="amount" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" value="20,000" readonly> 
                                </div> 
                                <p class="text-red-500"><i class="fa fa-exclamation-triangle"></i> This amount Valid for one month only, E-library Licence</p>
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
