@extends('layouts.app')
@section('content')
<head>
	
</head>
<div class="container">

	<div class="col-10-md-7-xs col-xl-offset-1">
	<div class="table-responsive">
		<h1>Usuarios</h1>
		<table class="table table-striped"  width="100%" id="users">
			<thead>
				<tr>
					<th scope="col" class="table-active">#</th>
					<th scope="col">Nombre</th>
					<th scope="col">Email</th>
					<th scope="col">Edad</th>
					<th scope="col">Sexo</th>
					<th scope="col">Escolaridad</th>
					<th scope="col">Foto</th>
					<th scope="col">Creado:</th>
					<th scope="col">Resultados</th>
				</tr>
			</thead>
		</table>
		</div>
		<br><br><br>
		<a href="{{ route('registro') }}" 
		<button class="btn btn-danger">Regresar</button>
	</a>
	</div>
</div>

{{  $usuario->render() }}


@endsection