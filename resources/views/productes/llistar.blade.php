@extends('base')

@section('title')
[ADMIN] Llistat Productes
@stop


@section('title_block')
<hr>
[ADMIN] Llistat Productes
<hr>
@stop

@section('contingut')
<a class="btn btn-success mb-2" href=" {{ route("afegir_producte") }} ">Afegir</a>

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
                <a class="btn btn-outline-primary btn-sm" href=" {{ route("editar_producte", ['id' => $producte->id ]) }} ">Editar</a>
                <a class="btn btn-outline-danger btn-sm" href=" {{ route("eliminar_producte", ['id' => $producte->id ]) }} ">Eliminar</a>
            </td>
        </tr>


        @endforeach
    </tbody>
</table>
@stop