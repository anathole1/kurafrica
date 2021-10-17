<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegKuraController extends Controller
{
    public function show(){
        return view('backed.reg_kura');
    }
}
