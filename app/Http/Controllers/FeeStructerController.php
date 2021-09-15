<?php

namespace App\Http\Controllers;

use App\Models\FeeStructer;
use App\Models\Class_session;
use Illuminate\Http\Request;

class FeeStructerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('FeeStructer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class_section = Class_session::all();
        // dd($class_section);
        // die();
        return view('FeeStructer.create',compact('class_section'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $feeStructer = New FeeStructer();
        $feeStructer->section_id = $request->section_id;
        $feeStructer->admission_fee = $request->admission_fee;
        $feeStructer->tution_fee = $request->tution_fee;
        $feeStructer->genral_fund = $request->genral_fund;
        $feeStructer->medical_fund = $request->medical_fund;
        $feeStructer->red_cross_fund = $request->red_cross_fund;
        $feeStructer->welfare_fund = $request->welfare_fund;
        $feeStructer->magazine_fund = $request->magazine_fund;
        $feeStructer->library_security = $request->library_security;
        $feeStructer->affiliation_fund = $request->affiliation_fund;
        $feeStructer->board_universty_registration_fee = $request->board_universty_registration_fee;
        $feeStructer->secience_fund = $request->secience_fund;
        $feeStructer->absence_fine = $request->absence_fine;
        $feeStructer->fine_fund = $request->fine_fund;
        $feeStructer->parking_fee = $request->parking_fee;
        $feeStructer->sports_fund = $request->sports_fund;
        $feeStructer->id_card_fee = $request->id_card_fee;
        $feeStructer->computer_fee = $request->computer_fee;
        $feeStructer->exam_fund = $request->exam_fund;
        // dd($feeStructer);
        // die();
        $feeStructer->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FeeStructer  $feeStructer
     * @return \Illuminate\Http\Response
     */
    public function show(FeeStructer $feeStructer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FeeStructer  $feeStructer
     * @return \Illuminate\Http\Response
     */
    public function edit(FeeStructer $feeStructer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FeeStructer  $feeStructer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeeStructer $feeStructer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FeeStructer  $feeStructer
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeeStructer $feeStructer)
    {
        //
    }
}
