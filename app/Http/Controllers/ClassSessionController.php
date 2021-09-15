<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Class_session;
use App\Http\Controllers\Redirect;
class ClassSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('session.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('session.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo "string";
        // die();
        //   $request->validate([
        //     'class_name' => 'required',
        //     'session_name' => 'required',
        //     'des' => 'required',
        //     'start_year' => 'required',
        //     'end_year' => 'required',
        //     'status_id' => 'required',
        //     'sudes4' => 'required',
        //     'des2' => 'required',
        // ]);
        $classsession = New Class_session();
        $classsession->class_name = $request->class_name;
        $classsession->session_name = $request->session_name;
        $classsession->start_year = $request->start_year;
        $classsession->end_year = $request->end_year;
        $classsession->status_id = $request->status_id;
        // dd($classsession);
        // die();
        
        $classsession->save();
         return view('admin')->with('success','Record update successfully.');
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
        return view('session.edit');
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
