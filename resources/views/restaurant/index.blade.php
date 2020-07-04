@extends('layouts.master')

@section('content')
<div class="row">
    <br/>
   
    <br/>
        <table class="table table-hover table-responsive">
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Dirección</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Foto</th>
                <th scope="col"># Reservas</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach( $arrayRestaurantes as $key => $restaurante )
                <tr>
                    <td>{{$restaurante->name}}</td>
                    <td >{{$restaurante->description}}</td>
                    <td>{{$restaurante->address}}</td>
                    <td>{{$restaurante->city}}</td>
                    <td><img src="{{ $restaurante->url_photo }}" height="120px" width="130px" alt="" srcset=""> </td>
                    <td>{{$restaurante->number_stockpiles}}</td>
                    <td><a href="{{ url('/restaurants/show/' .	$restaurante->id ) }}"><button class="btn btn-primary" style="color: white; white-space: nowrap;">Ver más</button></a></td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    

@stop