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
           
            <h1>Payment was made successful, your grace period will expire 30-Jan-2022 </h1>
        </div>
       
    </div>
</div>
@endsection
