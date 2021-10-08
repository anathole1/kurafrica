<?php

namespace App\Http\Controllers;
use App\Models\MenteeApplication;
use Illuminate\Http\Request;

class menteeApplicationController extends Controller
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
        $applications = MenteeApplication::all();
        return view('mentee_application.index')->with('applications',$applications);
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mentee_application.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'pname' =>'required',
            'title'=>'required',
            'address'=>'required',
            'tel'=>'required',
            'email'=>'required',
            'av_time'=>'required',
            'b_time'=>'required',
            'c_name'=>'required',
            'dob'=>'required',
            'category'=>'required',
            'availability'=>'required',
            'prtime'=>'required',
            'c_school'=>'required',
            'ac_year'=>'required',
            'expectations'=>'required'
        ]);

        $application = new MenteeApplication;
        // $category->implode(',',$request->input('category'));
        // $availability->implode(',',$request->input('availability'));
        // $prtime->implode(',',$request->input('prtime'));
        $application->pname=$request->input('pname'); 
        $application->title=$request->input('title') ;
        $application->address=$request->input('address'); 
        $application->tel=$request->input('tel') ;
        $application->email=$request->input('email'); 
        $application->p_av_time=$request->input('av_time') ;
        $application->b_time_call=$request->input('b_time') ;
        $application->child_name=$request->input('c_name'); 
        $application->dob=$request->input('dob'); 
        // $application->facility=$request->input($category); 
        $application->facility=implode(',',$request->input('category')); 
        // $application->availability=$request->input($availability); 
        $application->availability=implode(',',$request->input('availability'));
        // $application->program_time=$request->input($prtime); 
        $application->program_time=implode(',',$request->input('prtime'));
        $application->c_school=$request->input('c_school') ;
        $application->ac_year=$request->input('ac_year'); 
        $application->expections=$request->input('expectations');
        $application->save();

        return redirect('/mentee_application/create')->with('success', 'Application successfully Created. we will contact you soon.');
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
