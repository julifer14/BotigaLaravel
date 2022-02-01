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
                <a class="btn btn-outline-info btn-sm" href=" {{ route("fitxa_producte", ['id' => $producte->id ]) }} ">Fitxa</a>
            </td>
        </tr>


        @endforeach
    </tbody>
</table>
@stop