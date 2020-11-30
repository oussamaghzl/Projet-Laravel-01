@extends('templateCoach')

@section('content')
    
    <h1 class="titre">Les equipes</h1>


    <div class="affichageEquipe row my-5">
        
        <div class="col-8 terrain" style="background-image: url('{{asset('img/terrain03.jpg')}}')">

                        <!-- Button trigger modal -->
            
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choisir un joueur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <table class="table text-center">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">Joueur</th>
                                <th scope="col">Poste</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Mark</td>
                                <td>Avant</td>
                              </tr>
                              <tr>
                                <td>Zidane</td>
                                <td>Arriere</td>
                              </tr>
                              <tr>
                                <td>Abdelilou</td>
                                <td>remplacant</td>
                              </tr>
                            </tbody>
                          </table>
                          

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                </div>
            </div>  

            <div class="col-8">

                @foreach ($profil as $item)
    
                    @if($loop->iteration % 2 == 0)     
                        </div>     
                        <div class="row">
                            <div class="col-6">
                                <div class="carte carte1" style="background-image: url('{{asset('img/carte.png')}}')">
    
                                <img class="contact" src="{{asset('images/' . $item->photo)}}" alt="">
            
                    @endif
                            </div>
    
                @endforeach
            </div>


        </div>
        <div class="col-4 equipeNom">
            <h1 class="titre">Equipe 01</h1>
        </div>
    </div>

       

{{--      
    <h3></h3>
    <h3>{{$item->prenom}}</h3>
    <h3>{{$item->age}}</h3>
    <h3>{{$item->numeros}}</h3>
    <h3>{{$item->email}}</h3>
    <h3>{{$item->genre}}</h3>
    <h3>{{$item->origin}}</h3>
    <h3></h3>
    <h3>{{$item->poste->poste}}</h3> --}}
    

<<<<<<< HEAD
</form>
@endforeach
  
=======
   
>>>>>>> 210aa0667db38a7d509b2da6a0f77ce2de8a64a1
   

@endsection
