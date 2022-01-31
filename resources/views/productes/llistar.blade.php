@extends('base')

@section('title')
Llistat Productes
@stop


@section('title_block')
Llistat Productes
@stop

@section('contingut')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Preu</th>
            <th scope="col">Categoria</th>
            <th scope="col">Accions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productes as $producte)
        <tr>
            <th scope="row">{{ $producte->id }}</th>
            <td>{{ $producte->nom }}</td>
            <td>{{ $producte->preu }}</td>
            <td>{{ $producte->categoria->nom }}</td>
            <td>
                
            </td>
        </tr>


        @endforeach
    </tbody>
</table>
@stop