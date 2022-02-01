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
    <div class=" mb-3">
        <label class="form-label" for="nom">Nom del producte:</label>
        <input class="form-text form-control form-control-lg" type="text" id="nom" name="nom">
    </div>
    <div class=" mb-3">
        <label class="form-label" for="descripcio">Descripció:</label>
        <input class="form-text form-control form-control-lg" type="text" id="descripcio" name="descripcio">
    </div>
    <div class=" mb-3">
        <label class="form-label" for="preu">Preu:</label>
        <input class="form-control form-control-lg" type="number" step="0.01" id="preu" name="preu">
    </div>
    <div class="">
        <label class="form-label" for="categories">Categoria: </label>
        <select name="categoria" id="categoria" class="form-select form-control form-control-lg">
            <option selected>Selecciona una categoria</option>
            @foreach ($categories as $c)
            <option value="{{ $c->id }}">{{$c->nom}} </option>
            @endforeach
        </select>
    </div>
    <button class="btn btn-primary" type="submit">Enviar</button>

</form>

@stop