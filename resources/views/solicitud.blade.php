@extends('layouts.app')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i>
                Lista de Solicitudes
            </h1>
        </div>
        <div class="page">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>IDSolicitud</th>
                            <th>IDCliente</th>
                            <th>IDPersonal</th>
                            <th>Aceptar</th>
                            <th>Cancelar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($solicitudes as $codigo=>$solicitud)
                            <tr>
                                <td>{{$codigo}}</td>
                                <td>{{$solicitud['IDCliente']  }}</td>
                                <td>{{$solicitud['IDPersonal'] }}</td>

                                @if(isset($solicitud['Estado']))
                                    <td colspan="2">
                                        {{$solicitud['Estado']}}
                                    </td>
                                @else
                                <td><a href="{{ route('notificationsgood',$codigo) }}" class="btn btn-success"><i class="fa fa-plus-circle"></i></a></td>
                                <td><a href="{{ route('notificationsbad',$codigo) }}" class="btn btn-warning"><i class="fa fa-trash-o"></i></a></td>
                                @endif
                            </tr>
                        @endforeach
                    
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    
@stop


