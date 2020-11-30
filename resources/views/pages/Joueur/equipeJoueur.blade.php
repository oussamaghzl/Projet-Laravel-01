@extends('templateJoueur')

@section('content')
    
    <h1 class="titre">Mon equipe</h1>


        <div class="form-group text-center mx-3">
            

            
            <label class="titre" for="inputState">Choisissez votre equipe </label>
            <div class=" bordure">
                @foreach ($equipes as $item)
                    <div class="row my-3">
                        <div class="col-6 dddd">
                            <label class="form-check-label" for="exampleRadios1">
                                {{$item->equipe}}
                            </label>
                        </div>
                        <div class="col-6">
                            <a href="/show-equipe/{{$item->id}}">            
                                <button class="btn btn-primary"> Afficher equipe</button>
                            </a>
                        </div>
                        
                    </div>
                 @endforeach
            </div>
            
          
            
          </div>
             
    
@endsection