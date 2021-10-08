@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Lending Book</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Supporting program packages</h2>
        </div>
        <div class="col-sm-6">
            <img src="/storage/images/elibrary_1.jpg" style="height: 300px; width:100%; object-fit:cover" alt="" class="img-thumbnail">
            <h3>1. Books on E-library</h3>
            <p>The website has an E-library where children can access all books thus creating a culture of reading.

            </p>
            <div class="col-12 text-center ">
                <h5 class="text-center"><b>Period: one month</b></h5>
                <h5 class="text-center"><b>Price: 20$ USD</b></h5>
                <a href="/mentee_application/create" class="btn btn-outline-primary">Apply Now</a>
            </div>
        </div>
        <div class="col-sm-6">
            <img src="/storage/images/lendingbook.jpeg" style="height: 300px;width:100%; object-fit:cover" alt="" class="img-thumbnail">
            <h3>2. Delivering books at home</h3>
            <p>Furthermore, we also lend books to our mentees to develop the art of reading. </p>
            <div class="col-12 text-center ">
                <h5 class="text-center"><b>Period: one month</b></h5>
                <h5 class="text-center"><b>Price: 50$ USD</b></h5>
                <a href="/mentee_application/create" class="btn btn-outline-primary">Apply Now</a>
            </div>
        </div>
    </div>
   
</div>
@endsection