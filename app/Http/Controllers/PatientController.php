<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient;
use App\pain;

class PatientController extends Controller
{
      public function index()
    {
     $sliders=patient::all();
     return view('records',compact('sliders'));

    }
    public function store(Request $request )
    {
        $patient = new patient;
        
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
        $patient->Days= request('Days');
        $patient->Months= request('Months');
        $patient->Years= request('Years');
        $patient->save();

        $data=patient::all()->last()->id;
        $newdata=patient::all()->last();
        return view('next',compact(['newdata']));


    }
    public function storee(Request $request )
    {
        $pain = new pain;
        
        $pain->Thoracic_Spine= request('Thoracic_Spine');
        $pain->Lumber_Spine= request('Lumber_Spine');
        $pain->Hip= request('Hip');
        $pain->Sij= request('Sij');
        $pain->Knee= request('Knee');
        $pain->Ankle= request('Ankle');
        $pain->Cervical_Spine= request('Cervical_Spine');
        $pain->Shoulder= request('Shoulder');
        $pain->save();


    }
}
