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
<hr>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h1 class="panel-title"><center>El arte de pensar</center></h1><br>
				<small class="text-muted">Leyenda: Debes contestar con numeros del 1 al 5, no debes repetir los numeros en cada campo. <br> 1: Es lo primero que harias(mayor prioridad) y 5: lo ultimo que harias(menor prioridad), responde a acorde tu jucio en cada una de las preguntas.</small>
			</div>
			<div class="panel-body">
				<form class="form-inline" method="POST" action="{{URL::action('EncuestaController@storeP1')}}">

					{{ csrf_field()}}
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
									id="a"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Expresa de la mejor manera los valores e ideales involucrados</td>
									<td><input type="number"
											class="form-control" 
											name="2a"
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
					</div><strong><h4><b>Pregunta 1/18</b></h4></strong>
					<button class="btn btn-success btn-block">Siguiente</button>
				</form>
			</div>
						