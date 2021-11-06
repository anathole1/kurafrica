@extends('layouts.app')
@section('title','Home And Online Coaching')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Home-Online Coaching</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Supporting program packages</h2>
            </div>
            <div class="col-sm-6">
                <img src="/storage/images/online-education.jpg" style="height: 300px;width:100%; object-fit:cover" alt="" class="img-thumbnail">
                <h3>1. Online based coaching</h3>
                <p>This upskills takeaway offers practical coaching sessions via different online platforms.
                </p>
                <div class="col-12 text-center ">
                    <h5 class="text-center"><b>Period: one month</b></h5>
                    <h5 class="text-center"><b>Price: 20$ USD</b></h5>
                    <a href="/mentee_application/create" class="btn btn-outline-primary">Apply Now</a>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="/storage/images/coaching.jpg" style="height: 300px;width:100%;object-fit:cover" alt="" class="img-thumbnail">
                <h3>2. Home based Coaching</h3>
                <p>This upskills takeaway provides practical coaching sessions at home</p>
                <div class="col-12 text-center ">
                    <h5 class="text-center"><b>Period: one month</b></h5>
                    <h5 class="text-center"><b>Price: 50$ USD</b></h5>
                    <a href="/mentee_application/create" class="btn btn-outline-primary">Apply Now</a>
                </div>
            </div>
        </div>
       
    </div>
@endsection