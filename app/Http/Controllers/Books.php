<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Books extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // $books = Book::all();
        // return view('books.index')->with('books',$books);
        return view('books.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'bname' => 'required',
            'bauthor' => 'required',
            'level' => 'required',
            'bookpdf' => 'required|mimes:pdf|max:10000'
        ]);
        //handle the file upload
        if($request->hasFile('bookpdf')){
            //get filename with extension
            $filenameWithExt = $request->file('bookpdf')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('bookpdf')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('bookpdf')->storeAs('public/upbook',$fileNameToStore);
        }else{
           $fileNameToStore = 'nodoc.pdf';
        }

        
        $post = new Book;
        $post->bookname = $request->input('bname');
        $post->author = $request->input('bauthor');
        $post->level = $request->input('level');
        // $post->user_id = auth()->user()->id;
        $post->bookfile = $fileNameToStore;
        $post->save();

        return redirect('/books')->with('success', 'book Created.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
