<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Pays;
use App\Models\Photo;
use App\Models\Poste;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
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
        $pays = Pays::all();
        $equipes = Equipe::all();
        $postes = Poste::all();
        return view('pages.Joueur.createJoueur', compact('pays','equipes','postes'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profil=new Profil;
        $profil->nom=$request->nom;
        $profil->prenom=$request->prenom;
        $profil->age=$request->age;
        $profil->numeros=$request->numeros;
        $profil->email=$request->email;
        $profil->genre=$request->genre;
        $profil->origin=$request->origin;
        $profil->photo=$request->file('photo')->hashName();
        $profil->equipes_id=$request->equipes_id;
        $profil->poste_id=$request->poste_id;

        $profil->save();

        $request->file('photo')->storePublicly('images','public');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(Profil $profil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profil $profil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        //
    }
}
