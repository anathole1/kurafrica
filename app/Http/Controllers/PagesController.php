<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pages.elibrary');
    }
}
