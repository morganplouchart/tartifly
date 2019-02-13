<?php

namespace App\Http\Controllers;

use App\Voyage;
use Illuminate\Http\Request;

class VoyagesController extends Controller
{
    public function __construct(){
        //$this->middleware('admin');
        //$this->middleware('admin')->only('stats');
        //$this->middleware('guest')->only('voyages');
    }

    public function stats(){
        return view('site/stats');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $voyages = Voyage::where('libelle', 'like', '%'.$search.'%')->get();
        //dd($voyages);
        return view('site/voyages', ['voyages' => $voyages]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pays' => 'required',
            'libelle' => 'required',
        ]);

        $voyage = new Voyage;
        $voyage->pays = $request->pays;
        $voyage->libelle = $request->libelle;
        $voyage->duree = $request->duree;
        $voyage->cout = $request->cout;
        $voyage->photo = $request->photo;
        $voyage->description = $request->description;
        $voyage->disponibilite = $request->disponibilite;
        $voyage->save();
        return redirect()->route('listeVoyages');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function show(Voyage $voyage)
    {
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function edit(Voyage $voyage)
    {
        return view('site.edit',['voyage'=> $voyage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voyage $voyage)
    {
        $voyage->pays = $request->pays;
        $voyage->libelle = $request->libelle;
        $voyage->duree = $request->duree;
        $voyage->cout = $request->cout;
        $voyage->photo = $request->photo;
        $voyage->description = $request->description;
        $voyage->disponibilite = $request->disponibilite;
        $voyage->save();
        return redirect()->route('listeVoyages');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voyage $voyage)
    {   
        $voyage->delete();
        return redirect()->route('listeVoyages');
    }
    public function showVoyages()
    {
        $voyages = Voyage::all();
        return view('site/voyages',['voyages'=> $voyages]);
    }
    public function showOneVoyage($id)
    {
        $Onevoyage = Voyage::find($id);
        return view('site/oneVoyage',['Onevoyage'=> $Onevoyage]);
    }
}
