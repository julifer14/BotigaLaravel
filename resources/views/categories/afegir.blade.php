@extends('dashboard')

@section('title')
Afegir categoria
@stop


@section('title_block')
Afegir categoria
@stop


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('contingut')

<form action="{{route("guardar_categoria")}}" method="post">
    @csrf
    <label for="nom">Nom de la categoria:</label>
    <input type="text" id="nom" name="nom">
    <br>
    <button class="btn btn-primary" type="submit">Enviar</button>
    
</form>

@stop