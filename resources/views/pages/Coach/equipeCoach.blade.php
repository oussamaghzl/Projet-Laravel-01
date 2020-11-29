@extends('templateCoach')

@section('content')
 
       
<h1 class="titre">Créer votre équipes</h1>
<form action="/store-equipe" method="post">
    @csrf
    <div class="container mt-5">
    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="inputCity">Nom d'équipe</label>
            <input type="text" class="form-control" id="inputCity" name="equipe">
          </div>

          <div class="form-group col-md-6">
            <label for="inputCity">Nom du coach</label>
            <input type="text" class="form-control" id="inputCity" name="coach">
          </div>

          <div class="form-group col-md-6">
            <label for="inputCity">ville</label>
            <input type="text" class="form-control" id="inputCity" name="ville">
          </div>

        <div class="form-group col-md-6">
            <label for="inputCity">Nombre de joueur max</label>
            <input type="text" class="form-control" id="inputCity" name="nombres">
          </div>

       <div class="form-group col-md-6">
            <label for="inputState">Pays</label>
            <select id="inputState" class="form-control" name="pays_id">

                @foreach ($pays as $item)
            <option value="{{$item->id}}">{{$item->pays}}</option>
                @endforeach
            </select>
      </div>
      </div>    
    <button type="submit" class="btn btn-primary">S'incrire</button>
</div>
</div>
  </form>
@endsection