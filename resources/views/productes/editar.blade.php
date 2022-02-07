@extends('base')

@section('title')
Editar producte
@stop


@section('title_block')
Editar producte
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

<form action="{{route("editar_producte",['id'=>$producte->id])}}" method="post">
    @csrf
    <div class=" mb-3">
        <label class="form-label" for="nom">Nom del producte:</label>
        <input class="form-text form-control form-control-lg" type="text" value="{{$producte->nom}}" id="nom" name="nom">
    </div>
    <div class=" mb-3">
        <label class="form-label" for="descripcio">Descripció:</label>
        <input class="form-text form-control form-control-lg" type="text" value="{{$producte->descripcio}}" id="descripcio" name="descripcio">
    </div>
    <div class=" mb-3">
        <label class="form-label" for="preu">Preu:</label>
        <input class="form-control form-control-lg" type="number" step="0.01" value="{{$producte->preu}}" id="preu" name="preu">
    </div>
    <div class="">
        <label class="form-label" for="categories">Categoria: </label>
        <select name="categoria" id="categoria" value={{$producte->categoria}} class="form-select form-control form-control-lg">
            @foreach ($categories as $c)
                @if($c->id == $producte->categoria->id)
                    <option selected value="{{ $c->id }}">{{$c->nom}} </option>
                @else
                    <option value="{{ $c->id }}">{{$c->nom}} </option>
                @endif
            
            @endforeach
        </select>
    </div>
    <button class="btn btn-primary" type="submit">Enviar</button>

</form>

@stop