@extends('templateJoueur')

@section('content')
    
    <h1 class="titre">Dashboard</h1>

    <h1> Equipes au hasard</h1>
    
    @foreach ($teamHasard as $item)
            @if ($item->nombres==$item->membres)
                <div class="col-6 mt-4">
                    <h5>{{$item->equipe}}</h5>
                </div>
            @endif 
        
    @endforeach

    <h1> 4 joueurs sans equipes au hasard</h1>
    
    @foreach ($teamHasardJ as $elem)
                    <div class="col-6 mt-4">
                        <h5>{{$elem->nom}}</h5>
                    </div>
    @endforeach

    <h1> 4 joueurs avec equipe au hasard</h1>
    
    @foreach ($teamHasardE as $elem)
                    <div class="col-6 mt-4">
                        <h5>{{$elem->nom}}</h5>
                    </div>
    @endforeach

    <h1> 2 équipes non remplies au hasard</h1>
    
    @foreach ($teamHasardNR as $elem)
                    <div class="col-6 mt-4">
                        <h5>{{$elem->equipe}}</h5>
                    </div>
    @endforeach

    <h1> Pays EUROPE</h1>
    
    @foreach ($equipe as $elem)
                    @if($elem->pays->continent=="Europe")
                        <div class="col-6 mt-4">
                        <h5>{{$elem->equipe}}</h5>
                        </div>
                    @endif
              
    @endforeach

    <h1> Pays HORS EUROPE</h1>


    @foreach ($equipe as $elem)
    @if($elem->pays->continent!="Europe")
        <div class="col-6 mt-4">
        <h5>{{$elem->equipe}}</h5>
        </div>
    @endif
    @endforeach


    <h1> RPZ </h1>

    @foreach ($equipe as $elem)
    @foreach ($profil as $item)
    @if($elem->pays->pays==$item->origin)
    <div class="col-6 mt-4">
    <h5>{{$item->nom}}</h5>
    </div>
    @endif
    @endforeach
    @endforeach

    <h1> Femme </h1>

    @foreach ($fille as $elem)
        <div class="col-6 mt-4">
        <h5>{{$elem->nom}}</h5>
        </div>
    @endforeach

    <h1> Homme </h1>

    @foreach ($homme as $elem)
        <div class="col-6 mt-4">
        <h5>{{$elem->nom}}</h5>
        </div>
    @endforeach

   



@endsection