@extends('templateJoueur')

@section('content')
    
    <h1 class="titre">Les equipes</h1>

    <div class="affichageEquipe row my-5">
        
        <div class="col-8 terrain" style="background-image: url('{{asset('img/terrain03.jpg')}}')">

                        

            <div >
                <img class="carte1 carte" src="{{asset('img/carte.png')}}" alt="">
                
            </div>
            <img class="carte2 carte" src="{{asset('img/carte.png')}}" alt="">
            <img class="carte3 carte" src="{{asset('img/carte.png')}}" alt="">
            <img class="carte4 carte" src="{{asset('img/carte.png')}}" alt="">
            <img class="carte5 carte" src="{{asset('img/carte.png')}}" alt="">
            <img class="carte6 carte" src="{{asset('img/carte.png')}}" alt="">


        </div>
        <div class="col-4 equipeNom">
            <h1 class="titre">Equipe 01</h1>
        </div>
    </div>

@endsection