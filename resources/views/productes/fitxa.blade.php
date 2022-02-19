@extends('base')

@section('title')
Llistat Productes
@stop


@section('title_block')
<hr>
Detall del producte
<hr>
@stop

@section('contingut')
<div class="card">
  <h5 class="card-header">{{$producte->nom}}</h5>
  <div class="card-body row">
    <div class="col-sm-3">
      <img src="/images/{{ $producte->image }}" class="card-img-top"  alt="No image">
    </div>
    <div class="col-sm-9">
      <h6 class="card-subtitle mb-2 text-muted"><span>Id: </span> {{$producte->id}}</h6>
      <p class="card-text"><span>Descripció: </span>{{ $producte->descripcio }}</p>
      <p class="card-text"><span>Preu: </span>{{ $producte->preu }} €</p>
      <p class="card-text"><span>Stock: </span>{{ $producte->stock }}</p>
      <p class="card-text"><span>Categoria: </span>{{ $producte->categoria->nom }}</p>
    </div>
  </div>
</div>
@stop