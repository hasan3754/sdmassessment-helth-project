<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient;

class lcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=patient::all();
        return view('records',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        $slider = patient::find($id);
        return view('edit',compact('slider'));
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
        $patient = patient::find($id);
        $patient->Registration_ID_No = request('Registration');
        $patient->Date_of_Assessment= request('Date_of_Assessment');
        $patient->Referral_Source= request('Referral_Source');
        $patient->Examiner= request('Examiner');
        $patient->Name= request('Name');
        $patient->Age= request('Age');
        $patient->Gender= request('Gender');
        $patient->Address= request('Address');
        $patient->Occupation_Stress = request('Occupation');
        $patient->Contact_No= request('Contact');
        $patient->Referral_Diagnosis= request('Referral');
        $patient->Chief_Compliant = request('chief_compliant');
        $patient->HPC = request('HPC');
        $patient->Duration_of_Symptom= request('Duration_of_Symptoms');
        $patient->save();
        return redirect()->route('records.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider=patient::find($id);
        $slider->delete();
        return redirect()->back();;
    }
}
