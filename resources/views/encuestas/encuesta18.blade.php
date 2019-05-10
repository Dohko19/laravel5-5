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

	<div class="col-md-8-sm-6-xs col-md-offset-2-xs-sm-6">
	<div class="col-md-8-sm-6-xs-responsive col-md-offset-2-xs-sm-6">

		<div class="panel panel-info">
			<div class="panel-heading">
				<h1 class="panel-title"><center>Tipos de pensamiento</center></h1><strong style="text-align: right;"><b>Pregunta 18/18</b></strong><br>
				<small class="text-muted">Recuerda: Debes contestar con números del 5 al 1 donde 5 es lo que más te agrada y 1 lo que menos te agrada.<br> Además, no debes repetir ninguna opción y todos los campos son obligatorios.</small>
			</div>
			<div class="panel-body">
				<form class="form-inline" method="POST" action="{{URL::action('EncuestaController@storeP18')}}">
					{!! csrf_field() !!}

					<input type="hidden" id="id" name="id" value="{{ $id }}">
					<input type="hidden" name="pR" value="R" hidden>
					<div class="form-row">
						<table class="table table-striped" style="width:auto;">
							<p><b>R. Hablando en general, estoy más inclinado a:</b></p>
							<thead>	
							<tr>
								<th width="10"></th>
								<th width="30"></th>
								<th width="20"></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td >Encontrar métodos existentes que funcionan, y usarlos lo mejor posible.</td>
								<td><input class="form-control" 
									type="number" 
									name="1r"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Especular sobre cómo métodos dispares podrían funcionar juntos.</td>
									<td><input type="number"
											class="form-control" 
											name="2r"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Descubrir nuevos y mejores métodos.</td>
									<td><input type="number"
											class="form-control" 
											name="3r"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Encontrar maneras de hacer que los métodos existentes funcionen de una nueva y mejor forma.</td>
									<td><input type="number"
											class="form-control" 
											name="4r"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Averiguar cómo deberían funcionar los métodos existentes.</td>
									<td><input type="number"
											class="form-control" 
											name="5r"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						</table>

						</table>
						<hr>
						</div><!--Cierre del form row-->
			</div><!--Cierre del panel body-->
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