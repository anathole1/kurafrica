@extends('layouts.app')
@section('title','Internship')
@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Internship</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-12">
            <img src="/storage/images/internship.png" alt="" class="img-thumbnail d-lg-none">
            <img src="/storage/images/internship.jpg" width="100%"  alt="" class="img-thumbnail d-none d-sm-none d-md-none d-lg-block" style="height: 230px; object-fit:cover;object-position: left top;">
        </div>
        <div class="col-sm-6">
            <p ><b>Eligibility criteria:</b></p>
                <div class=" border-start border-3 border-danger px-1 rounded-start">
                <ol >
                    <li>Current university students at least in 2nd year and above</li>
                    <li>Flexible to work anyplace assigned by employer</li>
                    <li>Competent</li>
                    <li>Innovative mind and creative</li>
                    <li>Speaking,writing and understanding English,French and other languages will be more preferable.</li>
                    <li>Willing to learn from Team</li>
                    <li>Other qualifications</li>
                </ol>
                </div>
                <p>We  encourage women and girls to upskill through our internship program</p>
        </div>
        <div class="col-sm-6">
            <p ><b>Benefities:</b></p>
            <div class=" border-start border-3 border-success px-1 rounded-start">
                <ol>
                    <li>Internship certificate</li>
                    <li>Improving your professional career</li>
                    <li>Connections</li>
                    <li>Being exposed</li>
                    
                </ol>
            </div>
               <p><b> E-library:</b></p>
            <div class=" border-start border-3 border-primary px-1 rounded-start">
                Creating culture of reading books and upskills by reading books  
                which are found on E-library via on our website: <a href="/elibrary">www.kurafrica.com</a> 

            </div>
            <p>Here we will provide space for writing stories,books and newspapers,photos and innovative stuff.</p>
            <a href="/internapplication" class="nav-link text-danger animate__animated animate__bounce animate__delay-2s"><i class="fas fa-mobile fa-lg"></i> Apply Now</a>
        </div>
    </div>
</div>


@endsection