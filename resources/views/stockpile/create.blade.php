@extends('layouts.master')

@section('content')
<div class="row" style="margin-top:40px">
		<div class="offset-md-3 col-md-6">
			<div class="card">
				<div class="card-header text-center">
					Reservar Mesa <strong>{{$restaurante->name}}</strong>
				</div>
				<div class="card-body" style="padding:30px">
                    <form action="" method="POST">
						{{ csrf_field() }}
						{{ method_field('PUT') }}
						{{-- TODO: Protección contra CSRF --}}

						<div class="form-group">
							<label for="table">Mesa</label>
							<input type="text" name="table" id="table" class="form-control" value="">
						</div>

						<div class="form-group">
							<label for="date_stockpile">Fecha</label>
							<input type="date" name="date_stockpile" id="date_stockpile" class="form-control" value="">
						</div>

						<div class="form-group text-center">
							<button type="submit" class="btn btn-success" style="padding:8px 100px;margin-top:25px;">
								Reservar
							</button>
						</div>
						<div class="form-group text-center">
							<a href="{{ url('/restaurants/show/'. $id) }}">
								<button type="button" class="btn btn-secondary" style="padding:8px 100px;margin-top:25px;">
									Volver
								</button>
							</a>
						</div>
						
					</form>
					
				</div>
			</div>
		</div>
	</div>
@stop