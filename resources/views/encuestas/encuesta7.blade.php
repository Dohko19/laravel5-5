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
				<h1 class="panel-title"><center>Tipos de pensamiento</center></h1><strong style="text-align: right;"><b>Pregunta 7/18</b></strong><br>
				<small class="text-muted">Recuerda: Debes contestar con números del 5 al 1 donde 5 es lo que más te agrada y 1 lo que menos te agrada.<br> Además, no debes repetir ninguna opción y todos los campos son obligatorios.</small>
			</div>
			<div class="panel-body">
				<form class="form-inline" method="POST" action="{{URL::action('EncuestaController@storeP7')}}">
					{!! csrf_field() !!}

					<input type="hidden" id="id" name="id" value="{{ $id }}">
					<input type="hidden" name="pG" value="G" hidden>
					<table class="table table-striped">
						<div class="form-row">
							<p><b>G. Tengo a bien creer que algo es verdad, solo si ello:</b></p>
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
								<td>Se ha mantenido contra la oposición</td>
								<td><input class="form-control" 
									type="number" 
									name="1g"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Se empata con otras cosas en las que creo.</td>
									<td><input type="number"
											class="form-control" 
											name="2g"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Se ha demostrado que funciona en la práctica.</td>
									<td><input type="number"
											class="form-control" 
											name="3g"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Hace sentido lógico y científico.</td>
									<td><input type="number"
											class="form-control" 
											name="4g"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Puede ser verificado personalmente por hechos visibles.</td>
									<td><input type="number"
											class="form-control" 
											name="5g"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						</table>
						<hr>

						</div><!--Cierre del form row-->
			</div><!--Cierre del panel body-->
		</table>
					<button class="btn btn-success btn-block">Enviar</button>
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