@extends('layouts.master')

@section('content')
<div class="row">
    <br/>
        
    <br/>
        <table class="table table-hover ">
            <thead>
                <tr>
                <th scope="col">Restaurante</th>
                <th scope="col">Mesa</th>
                <th scope="col">Fecha</th>
                </tr>
            </thead>
            <tbody>
            @foreach( $arrayReservaciones as $key => $restaurante )
                <tr>
                    <td>{{$restaurante->restaurant->name}}</td>
                    <td >{{$restaurante->table}}</td>
                    <td>{{$restaurante->date_stockpile}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    

@stop
