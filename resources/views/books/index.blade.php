@extends('layouts.app')
@section('title','Books')
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
        <div class="d-none d-sm-block col-sm-3 bg-main rounded text-white ">
         @include('sidebar')
        </div>
        <div class="col-sm-9">
            <div class="w-full mb-12 px-4">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded 
                bg-green-600 text-white">
                  <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                      <div class="relative w-full px-4 max-w-full flex-grow flex-1 ">
                        <h3 class="font-semibold text-lg text-white">Book List</h3>
                      </div>
                      <div>
                        <a href="#" class="text-white bg-green-700 hover:text-white hover:bg-green-800 no-underline btn" data-toggle="modal" data-target="#modal-default" > Add Book </a>
                      </div>
                    </div>
                  </div>
                  <div class="block w-full overflow-x-auto ">
                    <table class="items-center w-full bg-transparent ">
                      <thead>
                        <tr>
                          <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-green-800 text-green-300 border-green-700">#</th>
                          <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-green-800 text-green-300 border-green-700">Book Name</th>
                          <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-green-800 text-green-300 border-green-700">Author</th>
                          <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-green-800 text-green-300 border-green-700">Level</th>
                          {{-- <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-green-800 text-green-300 border-green-700">Doc </th> --}}
                          <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-green-800 text-green-300 border-green-700">Action</th>
                        </tr>
                      </thead>
              
                      <tbody>
                        @if (count($books))
                          @php ($id = 1)
                           @foreach ($books as $book)
                               <tr>
                                 <th>{{$id}}</th>
                                 
                                  <td><img src="storage/cover_images/{{$book->cover}}" alt="" class="h-12 w-12 bg-white rounded-full border"> 
                                  <span class="ml-3 font-bold">  {{$book->bookname}} </span></td>
                                  <td>{{$book->author}}</td>
                                  <td>{{$book->level}}</td>
                                  {{-- <td>{{$book->bookfile}}</td> --}}
                                  <td>
                                    <a href="#">Edit</a>
                                    <a href="#">Delete</a>
                                  </td>
                               </tr>
                               @php($id = $id+1)
                           @endforeach 
                        @else
                            <tr>
                              <td colspan="6" class="badge badge-danger"> No book Found</td>
                            </tr>
                        @endif



                        {{-- <tr>
                          <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                            1</th>
                          <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">Moana</td>
                          <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            Moana</td>
                          <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                           N1
                          </td>
                          <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"><div class="flex items-center">
                             moana_111.pdf
                          </td>
                          <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                           Edit | Delete
                          </td>
                        </tr> --}}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
       
    </div>
</div>

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Book</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{-- <form action="{{route('store')}}" method="post" enctype="multipart/form-data"> --}}
          {!! Form::open(['action' => 'App\Http\Controllers\BookController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
          @csrf
          <div class="form-group row">
            <div class="col-sm-6">
              <label for="name">Book Name</label>
              <input type="text" class="form-control" id="bname" name="bname" placeholder="Enter book name">
             
            </div>
            <div class="col-sm-6">
              <label for="author">Book Author</label>
              <input type="text" class="form-control" id="bauthor" name="bauthor" placeholder="Enter book author">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-6">
              <label>Level</label>
              <select class="form-control select2" style="width: 100%;" name="level" id="level">
                <option selected="selected">choose Level</option>
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
            <div class="col-sm-6">
              <label for="exampleInputFile">Attach Book</label>
              <input type="file" class="form-control-file"  name="bookpdf" id="bookpdf">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Add Cover</label>
              <input type="file" class="form-control-file"  name="cover" id="cover">
          </div>
          <div class="justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn bg-green-800 text-white float-right">Save Book</button>
          </div>
        {{-- </form>  --}}
        {!! Form::close() !!}
      </div>

    
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection