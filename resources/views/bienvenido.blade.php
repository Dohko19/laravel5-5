@extends('layouts.app')

@section('content')
<div class="container">
@if ($errors->any())
    <div class="alert alert-warning	">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif
<div class="row">
	<div class="col-md-9 col-md-offset-1">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h1 class="panel-title">Acceso al Test</h1>
			</div>
			<div class="panel-body">
				
				<form method="POST" action="{{URL::action('UsuariosController@store') }}" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{!! csrf_token() !!}">
					<div class="form-group">
						<label form="nombre">Nombre: </label>
						<input class="form-control {{ $errors->has('email') ? 'has-error' : '' }}" 
								type="text"
								name="nombre"
								placeholder="Ingresa tu Nombre completo, emepezando por apellidos"
								value="{{ old('nombre') }}">
					</div>
					<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }} ">
						<label form="email">Email: </label>
						<input class="form-control" 
								type="email"
								name="email"
								placeholder="Ingresa tu Email"
								value="{{ old('email') }}">
					</div>
					<small>*Asegurate de que tu email este escrito correctamente</small>
					<div class="form-inline {{ $errors->has('email') ? 'has-error' : '' }} ">
						<label form="edad">Edad: </label>
						<input class="form-control" 
								type="text"
								name="edad"
								placeholder="Edad"
								maxlength="2"
								value="{{ old('edad') }}">
	
								<label form="sexo">Sexo: </label>
						<input class="form-control" 
								type="text"
								name="sexo"
								placeholder="Sexo (H o M)"
								value="{{ old('sexo') }}">

								<label form="escolaridad">Escolaridad: </label>
						<input class="form-control" 
								type="text"
								name="escolaridad"
								placeholder="Escolaridad"
								value="{{ old('escolaridad') }}">
					</div><br>
						<div class="form-group">
						<label form="">Foto: </label>
						<input class="form-control-file" type="file" name="photo"><br>
						<small>*Visita el siguiente enlace para saber como debes subir tu foto*</small><br>
						<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalLong">Como subir tu Foto</button>
					</div>
					<br>
				<center><button class="btn btn-primary">Acceder</button></center>
				</form><br>
				<nav class="navbar fixed-bottom navbar-light bg-light">	
					<img src="/images/logo_solexvintel.png">
				</nav>	
			</div>
		</div>
	</div>
</div>
				
			</div>
			<div class="col">
				
			</div>
		</div>
	</div>

	<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Como subir tu fotografia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p> Para darte resultados mas exactos pedimos que nos anexes una fotografia puede ser de tipo selfie pero
       debes de tener unas cosas en cuenta (explicadas mas abajo), tambien puedes subir una fotografia tamaño infantil, credencial de la escuela, o INE.</p>
		<br>
		<p>Requisitos para la fotografia</p>
       <ul>
       	<li>Fondo uniforme (la pared de un solo color)</li>
       	<li>Iluminación que no produzca sombras</li>
       	<li>Fotografias alejada del rostro</li>
       	<li>Foto frontal sin sonreir</li>
       	<li>Sin anteojos</li>
       	<li>Frente descubierta</li>
       </ul>

       <img src="images/fotorequisitos.png" alt="" width="400px" height="400px">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection