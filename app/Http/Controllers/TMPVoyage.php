<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voyage;

class VoyageController extends Controller
{
    public function showVoyages()
    {
        $voyages = Voyage::all();
        return view('site/voyage',['voyages'=> $voyages]);
    }
    public function showOneVoyage($id)
    {
        $Onevoyage = Voyage::find($id);
        return view('site/oneVoyage',['Onevoyage'=> $Onevoyage]);
    }
    
}
