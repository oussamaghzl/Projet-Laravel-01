@extends('templateJoueur')

@section('content')
    
    <h1 class="titre">Bienvenue dans Ultimate Tennis</h1>
    <h1 class="titre2">S'inscrire</h1>

    <form action="/profil" method="post">
        @csrf
        <div class="container mt-5">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Nom</label>
                <input type="text" class="form-control" id="inputCity" name="nom">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Prenom</label>
                <input type="text" class="form-control" id="inputCity" name="prenom">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Age</label>
                <input type="text" class="form-control" id="inputCity" name="age">
              </div>

            <div class="form-group col-md-6">
                <label for="inputCity">Numeros</label>
                <input type="text" class="form-control" id="inputCity" name="numeros">
              </div>
              <div class="form-group col-md-6">
            <label for="inputEmail4" >Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email">
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Pays</label>
            <select id="inputState" class="form-control" name="genre">
              <option selected>Homme</option>
            </select>
          </div>
          </div>    
          
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputState">Genre</label>
            <select id="inputState" class="form-control" name="genre">
              <option selected>Homme</option>
              <option>Femme</option>
              <option>Autres</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Post</label>
            <select id="inputState" class="form-control" name="poste">
              <option selected>Avant</option>
              <option>central</option>
              <option>arriere</option>
              <option>remplaçant</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Equipe</label>
            <select id="inputState" class="form-control" name="equipe">
              <option selected>Homme</option>
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
      </form>

@endsection