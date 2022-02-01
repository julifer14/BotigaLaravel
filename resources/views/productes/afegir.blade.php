@extends('base')

@section('title')
Afegir producte
@stop


@section('title_block')
Afegir producte
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

<form action="{{route("afegir_producte_save")}}" method="post">
    @csrf
    <label for="nom">Nom del producte:</label>
    <input type="text" id="nom" name="nom">
    <br>
    <label for="descripcio">Descripció:</label>
    <input type="text" id="descripcio" name="descripcio">
    <br>
    <label for="preu">Preu:</label>
    <input type="number" step="0.01" id="preu" name="preu"> €
    <br>
    <label for="categories">Categoria: </label>
    <select name="categories" id="categories">
        @foreach ($categories as $c)
            <option value="{{ $c->id }}">{{$c->nom}} </option>
        @endforeach
    </select>

    <button class="btn btn-primary" type="submit">Enviar</button>
    
</form>

@stop