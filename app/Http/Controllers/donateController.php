<?php

namespace App\Http\Controllers;
use App\Models\Donate;
use Illuminate\Http\Request;

class donateController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except' => ['create']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $donates = Donate::all();
        return view('donate.index')->with('donates',$donates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donate.create');
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
            'names' => 'required',
            'email'=> 'required|email',
            'tel' => 'sometimes|numeric|min:10',
            'type' => 'required|numeric'
        ]);

        $donates = new Donate;
        $donates->names = $request->input('names');
        $donates->email = $request->input('email');
        $donates->tel = $request->input('tel');
        $donates->type = $request->input('type');
        $donates->save();

        return redirect('/donate/create')->with('success', 'Thank you for your donations!');

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
