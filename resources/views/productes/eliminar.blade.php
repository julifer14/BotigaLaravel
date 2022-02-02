@extends('base')

@section('title')
Eliminar producte
@stop


@section('title_block')
Eliminar producte
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

<form action="{{ route("eliminar_producte", ['id' => $producte->id ]) }}" method="post">
    @csrf
    <p class="danger">Esteu segurs que voleu eliminar el producte {{$producte->nom}}? </p>
    
    <button class="btn btn-danger" type="submit">Eliminar</button>
    
</form>

@stop