@extends('template')

@section('content')
    
    <h1 class="titre">Ajouter un joueur</h1>

    <form action="/creation" method="post" enctype="multipart/form-data">
        @csrf
        
    </form>

@endsection