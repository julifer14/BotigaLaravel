@extends('dashboard')

@section('title')
Eliminar categoria
@stop


@section('title_block')
Eliminar categoria
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

<form action="{{ route("eliminar_categoria", ['id' => $categoria->id ]) }}" method="post">
    @csrf
    <p class="danger">Esteu segurs que voleu eliminar la categoria {{$categoria->nom}}? </p>
    
    <button class="btn btn-danger" type="submit">Eliminar</button>
    
</form>

@stop