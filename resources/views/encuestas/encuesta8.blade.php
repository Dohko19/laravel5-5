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
				<h1 class="panel-title"><center>Tipos de pensamiento</center></h1><strong style="text-align: right;"><b>Pregunta 8/18</b></strong><br>
				<small class="text-muted">Recuerda: Debes contestar con números del 5 al 1 donde 5 es lo que más te agrada y 1 lo que menos te agrada.<br> Además, no debes repetir ninguna opción y todos los campos son obligatorios.</small>
			</div>
			<div class="panel-body">
				<form class="form-inline" method="POST" action="{{URL::action('EncuestaController@storeP8')}}">
					{!! csrf_field() !!}

					<input type="hidden" id="id" name="id" value="{{ $id }}">
					<input type="hidden" name="pH" value="H" hidden>
					<table class="table table-striped">
					<div class="form-row">
							<p><b>H. Cuando leo el artículo de una revista en mi tiempo libre es muy probable que sea acerca de:</b></p>
							<thead>	
							<tr>
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col"></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Como alguien resolvió un problema de tipo personal o social</td>
								<td><input class="form-control" 
									type="number" 
									name="1h"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Un tema controvertido de naturaleza política o social.</td>
									<td><input type="number"
											class="form-control" 
											name="2h"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Un relato de una investigación científica o histórica.</td>
									<td><input type="number"
											class="form-control" 
											name="3h"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Un evento o persona interesante o divertida.</td>
									<td><input type="number"
											class="form-control" 
											name="4h"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>De un relato real sobre una experiencia interesante de alguna persona.</td>
									<td><input type="number"
											class="form-control" 
											name="5h"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						<hr>
						</div><!--Cierre del form row-->

			</div><!--Cierre del panel body-->
		</table>
					<button class="btn btn-success btn-block">Siguiente</button>
				</form>
				
			</div>
		</div>
	</div>
</div>
				
			</div>
			<div class="col">
				
			</div>
		</div>
@endsection