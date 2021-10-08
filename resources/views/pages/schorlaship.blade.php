@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Schorlaship</li>
            </ol>
        </nav>
        
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger">
                    No schorlaship available now
                </div>
            </div>
        </div>
    </div>
@endsection