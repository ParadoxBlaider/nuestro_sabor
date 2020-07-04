@extends('layouts.master')

@section('content')
<div class="row" style="margin-top:40px">
		<div class="offset-md-3 col-md-6">
			<div class="card">
				<div class="card-header text-center">
					Modificar Restaurante
				</div>
				<div class="card-body" style="padding:30px">
					<form action="" method="POST">
						{{ csrf_field() }}
						{{ method_field('PUT') }}
						{{-- TODO: Método diferente de POST - GET --}}

						<div class="form-group">
							<label for="name">Nombre</label>
							<input type="text" name="name" id="name" class="form-control" value="{{ $arrayRestaurante->name }}">
						</div>

						<div class="form-group">
							<label for="description">Descripción</label>
							<textarea name="description" id="description" class="form-control" rows="3">{{ $arrayRestaurante->description }}</textarea>
                        </div>
                        
						<div class="form-group">
							<label for="address">Dirección</label>
							<input type="text" name="address" id="address" class="form-control" value="{{ $arrayRestaurante->address }}">
						</div>

						<div class="form-group">
							<label for="city">Ciudad</label>
							<input type="text" name="city" id="city" class="form-control" value="{{ $arrayRestaurante->city }}">
                        </div>
                        
                        <div class="form-group">
							<label for="url_photo">Url Foto</label>
							<input type="text" name="url_photo" id="url_photo" class="form-control" value="{{ $arrayRestaurante->url_photo }}">
						</div>

						

						<div class="form-group text-center">
							<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
								Modificar restaurante
							</button>
						</div>
						<div class="form-group text-center">
							<a href="{{ url('/restaurants/show/'.$arrayRestaurante->id) }}" >
								<button type="button" class="btn btn-secondary">Volver</button>
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop