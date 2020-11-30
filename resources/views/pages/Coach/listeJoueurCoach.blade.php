@extends('templateCoach')

@section('content')
    
    <h1 class="titre">Liste des Joueurs</h1>

    @foreach ($profil as $item)

     
    <h3>{{$item->nom}}</h3>
    <h3>{{$item->prenom}}</h3>
    <h3>{{$item->age}}</h3>
    <h3>{{$item->numeros}}</h3>
    <h3>{{$item->email}}</h3>
    <h3>{{$item->genre}}</h3>
    <h3>{{$item->origin}}</h3>
    <h3>{{$item->equipe->equipe}}</h3>
    <h3>{{$item->poste->poste}}</h3>
    

</form>
@endforeach
   
   

@endsection