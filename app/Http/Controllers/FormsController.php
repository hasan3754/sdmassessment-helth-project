<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\createe;
use App\patient;
use App\Strength_test;
use App\posture;

class FormsController extends Controller
{

    public function index()
    {
        $games = Game::all();
        return view('games.index', ['games' => $games]);
    }
 
 
    public function storeee(Request $request )
    {
        $new = new posture;
        
        $new->standing = request('Standing');
        $new->pelvic_tilt = request('Pelvic_Tilt');
        $new->rib_xipi_sternum = request('sternum');
        $new->sitting = request('Sitting');
        $new->transition= request('Transition');
        $new->bed_mobility= request('Bed_Mobility');
        $new->user_id=patient::all()->last()->id;
        $new->save();



        $createe = new createe;
        
        $createe->Problem = request('myname');
        $createe->location = request('bedStatus');
        $createe->specific_problem = request('redStatus');
        $createe->Problem_range = request('gedStatus');
        $createe->user_id=patient::all()->last()->id;
        $createe->save();
   
        $next = new Strength_test;
        
        $next->Muscles_Groups = request('a');
    
        $next->MMT_right_or_left= request('b');
        $next->Rating= request('c');
        $next->user_id=patient::all()->last()->id;
        $next->save();
   
    }
    
}
