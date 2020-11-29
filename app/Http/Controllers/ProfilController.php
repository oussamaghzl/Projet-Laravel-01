<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Pays;
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
        $profil=new Profil;
        $profil->nom=$request->nom;
        $profil->age=$request->age;
        $profil->prenom=$request->prenom;
        $profil->numeros=$request->numeros;
        $profil->poste=$request->poste;
        $profil->email=$request->email;
        $profil->genre=$request->genre;
        $profil->save();

        $pays=new Pays();
        $pays->pays=$request->pays;
        $pays->profil_id=$profil->id;
        $pays->save();

        $equipe=new Equipe();
        $equipe->equipe=$request->equipe;
        $equipe->profil_id=$profil->id;
        $equipe->save();

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
