@extends('layouts.app')

@section('main-content')
<section class="container">
    <div class="row">
        <div class="col3">
            <ul class="d-flex flex-wrap">
                @forelse ($pokemons as $pokemon)
                <li class="me-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$pokemon->img_url}}" class="card-img-top" alt="pokemon image">
                        <div class="card-body">
                            <h4 class="card-title">{{$pokemon->name}} - <strong>N° {{$pokemon->id}}</strong> </h4>
                            <h5 class="card-text">{{$pokemon->species}}</h5>
                        </div>
                    </div>
                </li>
                @empty
                <li>
                    Pokemons not found
                </li>
                @endforelse
            </ul>
        </div>
    </div>
</section>

@endsection