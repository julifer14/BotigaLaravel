@extends('base')

@section('title')
Llistat Categories
@stop




@section('title_block')
<hr>
Llistat Categories
<hr>
@stop

@section('contingut')
<a class="btn btn-success mb-2" href=" {{ route("afegir_categoria") }} ">Afegir</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Accions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $c)
        <tr>
            <th scope="row">{{ $c->id }}</th>
            <td>{{ $c->nom }}</td>
            <td>
                <a class="btn btn-outline-primary btn-sm" href=" {{ route("editar_categoria", ['id' => $c->id ]) }} ">Editar</a>
                <a class="btn btn-outline-danger btn-sm" href=" {{ route("eliminar_categoria", ['id' => $c->id ]) }} ">Eliminar</a>
            </td>
        </tr>


        @endforeach
    </tbody>
</table>
@stop