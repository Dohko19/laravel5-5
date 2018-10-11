@extends('layouts.enc')
@section('content')


@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
			<?php $message=Session::get('message') ?>
			@if ($message=='store')
    <div class="alert alert-warning	">
        <ul>
            Bienvenido, Recuerda que no debes repetir los numeros en Cada una de las preguntas.
        </ul>
    </div><br />
@endif
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h1 class="panel-title"><center>Tipos de pensamiento</center></h1><strong style="text-align: right;"><b>Pregunta 1/18</b></strong><br>
				<small class="text-muted">Recuerda: Debes contestar con números del 5 al 1 donde 5 es lo que más te agrada y 1 lo que menos te agrada.<br> Además, no debes repetir ninguna opción y todos los campos son obligatorios.</small>
			</div>
			<div class="panel-body">
				<form class="form-inline" method="POST" action="{{URL::action('EncuestaController@storeP1')}}">

					{!! csrf_field() !!}
					<input type="hidden" id="id" name="id" value="{{ $id }}">
					<input type="hidden" name="pA" value="A" hidden>
					<div class="form-row">
						<table class="table table-striped">
							<p><b>A. Cuando se presenta un conflicto entre personas acerca de ideas. Tiendo a estar a favor de la parte que</b></p>
							
							<thead>
								<th></th>
								<th></th>
								<th></th>
							
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Identifica e intenta sacar a la luz el conflicto</td>
								<td><input class="form-control" 
									type="number" 
									name="1a"
									id="1a"
									required
									pattern="[0-9]"
									min="1"
									max="5"
									unique></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Expresa de la mejor manera los valores e ideales involucrados</td>
									<td><input type="number"
											class="form-control" 
											name="2a"
											id="2a"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Refleja de la mejor manera mi opinión y experiencia personal</td>
									<td><input type="number"
											class="form-control" 
											name="3a"
											id="3a"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Se aproxima a la situación con la mayor lógica y consistencia</td>
									<td><input type="number"
											class="form-control" 
											name="4a"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Mejor expresa el argumento de forma más concisa y contundente.</td>
									<td><input type="number"
											class="form-control" 
											name="5a"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
							
						</table>
					</div>
					<button class="btn btn-success btn-block">Siguiente</button>
				</form>
			</div>
			</div>
	</div>
</div>
@endsection
						