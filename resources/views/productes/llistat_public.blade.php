@extends('base')

@section('title')
Llistat Productes
@stop


@section('title_block')
<hr>
Llistat Productes
<hr>
@stop

@section('contingut')

<div class="row">

    @foreach ($productes as $producte)
    <div class="col-sm-6 pb-4" style="width: 18rem;">
        <div class="card">
            <img src="/images/{{ $producte->image }}" class="card-img-top" alt="No image">
            <div class="card-body">
                <h5 class="card-title">{{ $producte->nom }}</h5>
                <h6>{{ $producte->categoria->nom }}</h6>
                <p class="card-text">{{ $producte->preu }} €</p>
                <!--a href="{{ route("afegir_producte_cistella", ['id' => $producte->id ]) }}" class="btn btn-outline-success">Afegir a cistell</a>-->
                
                    <form method="POST" action="{{ route('afegir_producte_cistella', ['id' => $producte->id ]) }}">
                        @csrf

                        <button class="btn btn-outline-success btn-sm" href="#" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Afegir a cistell') }}
                        </button>
                    </form>
            </div>
        </div>
    </div>

    @endforeach

</div>
@stop