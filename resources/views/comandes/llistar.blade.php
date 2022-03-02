@extends('base')

@section('title')
    [ADMIN] Llistat Comandes
@stop


@section('title_block')
    <hr>
    [ADMIN] Llistat Comandes
    <hr>
@stop

@section('contingut')


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Estat</th>
                <th scope="col">Client</th>

                <th scope="col">Accions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comandes as $comanda)
                <tr>
                    <th scope="row">{{ $comanda->id }}</th>
                    <td>
                        @if ($comanda->estat === 0)
                            Pendent
                        @elseif ($comanda->estat == 1)
                            Preparant
                        @elseif ($comanda->estat == 2)
                            Enviada
                        @else
                            ERROR
                        @endif


                        
                    </td>

                    <td>{{ $comanda->user->name }}</td>
                    <td>
                       <!-- <a class="btn btn-outline-info btn-sm"
                            href=" {{ route('fitxa_producte', ['id' => $comanda->id]) }} ">Fitxa</a>
                        <a class="btn btn-outline-primary btn-sm"
                            href=" {{ route('editar_producte', ['id' => $comanda->id]) }} ">Editar</a>
                        <a class="btn btn-outline-danger btn-sm"
                            href=" {{ route('eliminar_producte', ['id' => $comanda->id]) }} ">Eliminar</a>-->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
