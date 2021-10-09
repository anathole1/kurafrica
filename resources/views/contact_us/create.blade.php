@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h4 class="text-success text-center card-title"> Send us a message</h4>
            </div>
            <div class="col-md-6">
                <div class="card bg-light border-0">
                    
                    <div class="card-body">
    
                      <form action="" method="post">
                        <div class="mb-3 row">
                            <label for="fname" class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-10">
                            <input type="text"  class="form-control" id="fname" name="fname" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="subject" name="subject">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="message" class="col-sm-2 col-form-label">Message</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" name="message" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="message" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                              <input type="submit" class="btn btn-primary" id="subject" name="subject" value="Send">
                            </div>
                        </div>
                       
                    </form>
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
                test
            </div>
        </div>
    </div>
@endsection