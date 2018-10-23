@extends('layouts.app')
@section('content')
<head>
	
</head>
<div class="container">

	<div class="col-18-md-15-xs col-xl-offset-1">
	<div class="table-responsive">

		<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Datos General</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  	
		<h1>Usuarios</h1>
		<table class="display table table-striped table-bordered"  width="100%" id="users">
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
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  	<h1>Resulados Totales</h1>
  	<table class="display table table-bordered table-striped" width="100%" id="resultado">
  		<thead>
  			<tr>
  				<th>ID</th>
  				<th>Sintentico</th>
  				<th>Idealista</th>
  				<th>Pragmatico</th>
  				<th>Analitico</th>
  				<th>Realista</th>
  				<th>Total</th>
  				<th>Usuario</th>
  			</tr>
  		</thead>
  	</table>
  </div>
</div>


		</div>
		<br><br><br>
		<a href="{{ route('registro') }}" 
		<button class="btn btn-danger">Regresar</button>
	</a>
	</div>
</div>

{{  $usuario->render() }}
@section('javascript')
	

@endsection
@endsection