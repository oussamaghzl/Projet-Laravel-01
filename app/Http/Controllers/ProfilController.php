<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Pays;
use App\Models\Poste;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{

    public function index()
    {
        $profil =  Profil::all();
        $equipes = Equipe::all();
        $postes =  Poste::all();

        return view('pages.Joueur.equipeJoueur', compact('profil','equipes','postes'));
    }

    public function index2()
    {

        $profil =  Profil::all();
        $equipes = Equipe::all();
        $postes =  Poste::all();

        return view('pages.Joueur.listeJoueur', compact('profil','equipes','postes'));
    }
    public function create()
    {
        $pays = Pays::all();
        $equipes = Equipe::all();
        $postes = Poste::all();
        return view('pages.Joueur.createJoueur', compact('pays','equipes','postes'));
    
    }

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


    public function show($id)
    {
        $profil =  Profil::find($id);
        $equipes = Equipe::find($id);
        $postes =  Poste::find($id);

        return view('pages.Joueur.show.showJoueur', compact('profil','equipes','postes'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profil =  Profil::find($id);
        $equipes = Equipe::all();
        $postes =  Poste::all();

        return view('pages.Joueur.editJoueur', compact('profil','equipes','postes'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Profil = Profil::find($id);
        $Profil->delete();
        
        Storage::disk('public')->delete('images/' . $Profil->photo);

        return redirect()->back();
    }
}
