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
				<h1 class="panel-title">El arte de pensar</h1><strong style="text-align: right;"><b>Pregunta 10/18</b></strong><br>
				<small class="text-muted">Leyenda: Debes contestar con numeros del 1 al 5, no debes repetir los numeros en cada campo. <br> 1: Es lo primero que harias(mayor prioridad) y 5: lo ultimo que harias(menor prioridad), responde a acorde tu jucio en cada una de las preguntas.</small>
			</div>
			<div class="panel-body">
				<form class="form-inline" method="POST" action="{{URL::action('EncuestaController@storeP10')}}">
					{{ csrf_field()}}
					<input type="hidden" id="id" name="id" value="{{ $id }}">
					<input type="hidden" name="pJ" value="J" hidden>
					<div class="form-row">
						
						<table class="table table-striped">
							<p><b>J. Cuando tengo una tarea por hacer lo primero que quiero saber es:</b></p>
							<thead>	
							<tr>
								<th></th>
								<th></th>
								<th></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Cuál es el mejor método para concluir la tarea.</td>
								<td><input class="form-control" 
									type="number" 
									name="1j"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Quien y cuando requieren que la tarea sea completada.</td>
									<td><input type="number"
											class="form-control" 
											name="2j"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Por que vale la pena hacer la tarea.</td>
									<td><input type="number"
											class="form-control" 
											name="3j"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>El efecto que puede tener en otras tareas que se deben realizar.</td>
									<td><input type="number"
											class="form-control" 
											name="4j"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Cual es el beneficio inmediato al hacer la tarea.</td>
									<td><input type="number"
											class="form-control" 
											name="5j"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody><!--Separador-->
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