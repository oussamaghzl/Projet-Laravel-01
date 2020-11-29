@extends('templateJoueur')

@section('content')
    
    <h1 class="titre pb-5">Bienvenue dans Ultimate Tennis</h1>

      <form action="/profil" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
          @csrf
          <h1 class="titre2">S'inscrire</h1>

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
                  <label for="inputCity">Origine</label>
                  <input type="text" class="form-control" id="inputCity" name="origin">
                </div>
              <div class="form-group col-md-6">
                  <label for="inputCity">Nombre de joueur dans l'equipe</label>
                  <input type="text" class="form-control" id="inputCity" name="numeros">
                </div>
                <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" id="inputEmail4" name="email">
          </div>
          <div class="form-group col-md-6">
              <label for="inputState">Pays</label>
              <select id="inputState" class="form-control" name="pays">
                <option selected active>Choix pays</option>
                  @foreach ($pays as $item)
                    <option selected>{{$item->pays}}</option>
                  @endforeach
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
              <label for="inputState">Poste</label>
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
                <option selected active>Choix equipe</option>
                  @foreach ($equi as $item)
                    <option selected>{{$item->equipes}}</option>
                  @endforeach
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">S'inscrire</button>
      </div>
        </form>

@endsection