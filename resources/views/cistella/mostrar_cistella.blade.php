@extends('base')

@section('title')
Cistella usuari
@stop


@section('title_block')
<hr>
Cistella de l'usuari
<hr>
@stop

@section('contingut')
<p>ID cistella: {{ $cistella->id }}</p>
<p>Cistella de l'usuari: {{ $cistella->user->name }}</p>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Producte</th>
            <th scope="col">Preu</th>
            <th scope="col">Quantiat</th>
            <th scope="col">Accions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cistella->liniaCistella as $linia)
        <tr>
            <th scope="row">{{ $linia->id }}</th>
            <td>{{ $linia->producte->nom }}</td>
            <td>{{ $linia->producte->preu }} €</td>
            <td>{{ $linia->quantitat }}</td>
            <td>

                <form method="POST" action="{{ route('eliminar_producte_cistella', ['linia_id'=>$linia->id]) }}">
                    @csrf

                    <button class="btn btn-outline-danger btn-sm" href="#" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Eliminar') }}
                    </button>
                </form>


            </td>
        </tr>


        @endforeach
    </tbody>
</table>
@stop