@extends('layouts.app')
@section('content')
<head>
	
</head>
<div class="container">
	<div class="col-1-md-5-xs col-xl-offset-1">
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
			{{-- @foreach($usuario as $usu)
		
			<tbody>
				<th>{{ $usu->id_usu }}</th>
				<th>{{ $usu->nombre }}</th>
				<th>{{ $usu->email }}</th>
				<th>{{ $usu->edad }}</th>
				<th>{{ $usu->sexo }}</th>
				<th>{{ $usu->escolaridad }}</th>
				<th><img class="zoom" src="/imageuser/{{ $usu->photo }}" width="100px" alt="{{ $usu->id_usu }}"></th>
				<th>{{ $usu->created_at }}</th>
				<td><a href="{{ URL::action('UsuariosController@verRes', $usu->id_usu) }}"><button class="btn btn-success">Ver Detalles</button></a></td>
				
			</tbody>
			
			@endforeach  --}}
		</table>
		</div>
		<br><br><br>
		<a href="{{ route('registro') }}" 
		<button class="btn btn-danger">Regresar</button>
	</a>
	</div>
</div>

{!! $usuario->render() !!}


@endsection