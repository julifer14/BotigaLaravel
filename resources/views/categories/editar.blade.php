@extends('dashboard')

@section('title')
Editar categoria
@stop


@section('title_block')
Editar categoria
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

<form action="{{ route("editar_categoria", ['id' => $categoria->id ]) }}" method="post">
    @csrf
    <label for="nom">Nom de la categoria:</label>
    <input type="text" id="nom" name="nom" value="{{$categoria->nom}}">
    <br>
    <button class="btn btn-primary" type="submit">Enviar</button>
    
</form>

@stop