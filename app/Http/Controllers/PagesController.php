<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Book;
class PagesController extends Controller
{

 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','about','childmentorship','ethical','hoc','internship','schorlaship']]);
    }

    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function childmentorship(){
        return view('pages.childmentorship');
    }
    public function ethical(){
        return view('pages.ethical');
    }
    public function hoc(){
        return view('pages.hoc');
    }
    public function internship(){
        return view('pages.internship');
    }
    public function schorlaship(){
        return view('pages.schorlaship');
    }
   //need login
    public function lendbook(){
        return view('pages.lendbook');
    }
    public function elibrary(){
        $books = Book::all();
        // return view('books.index')->with('books',$books);
        return view('pages.elibrary')->with('books',$books);
    }
    public function successPay(Request $request){
        $this->validate($request,[
            'tel' => 'required',
            'level' => 'required'
        ]);
        
        $spay = new Payment;
        $spay->userId = $request->input('userId');
        $spay->level = $request->input('level');
        $spay->amount = $request->input('amount');
        $spay->tel = $request->input('tel');
        $spay->expiration = $request->input('exp');
        $spay->save();
        return redirect('/home')->with('success', 'Payment made successfully.');
        //return view('pages.success_Payment');

    }
}
