@extends('layouts.master')

@section('content')
	<div class="row" style="margin-top: 20px;">
		<div class="col-sm-4" st>
			<img style="max-width: 100%;" src="{{ $restaurante->url_photo }}" alt="" height="300px" srcset="">
		</div>
		<div class="col-sm-8">
			<h1>{{$restaurante->nombre}}</h1>
			<h5>Dirección: {{$restaurante->address}}</h3>
			<h5>Ciudad{{$restaurante->city}}</h3><br/>

			<p>
                <strong>Descripción:</strong> {{$restaurante->description}}</p>
			<p>
				<strong>Estado: </strong> 
				@if($restaurante->number_stockpiles > 0 && $restaurante->number_stockpiles < 15)
					Hay reservaciones
				@elseif($restaurante->number_stockpiles >= 15)
					<span style="color: red;">
						No hay más reservaciones disponibles
					</span> 
				@else
					No tiene reservaciones
				@endif
			</p><br/>

			@if($restaurante->number_stockpiles >= 0 && $restaurante->number_stockpiles < 15)
				<a href="{{ url('/stockpiles/create/'. $restaurante->id) }}">
					<button type="submit" class="btn btn-success" style="display:inline">
						Reservar
					</button>
				</a>
			@endif
			
           
            
            <a href="{{ url('/restaurants/edit/' . $restaurante->id) }}" ><button class="btn btn-warning" style="color:white"> Editar restaurante</button></a>
            <form action="{{ action('RestaurantController@deleteRestaurant', $restaurante->id)}}" method="POST" style="display:inline">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				<button type="submit" class="btn btn-danger" style="display:inline">
					Eliminar restaurante
				</button>
			</form>
			<a href="{{ url('/restaurants') }}" ><button class="btn btn-default" style="color:white; background-color:#ccc">Volver a restaurantes</button></a>
			
		</div>
	</div>
@stop