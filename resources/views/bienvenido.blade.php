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
	<script>
		function mayus(e) {
    e.value = e.value.toUpperCase();
}
	</script>
<div class="row">
	<div class="col-lg-9-xs col-lg-offset-2">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h1 class="panel-title">Acceso al Test</h1>
			</div>
			<div class="panel-body">
				<form method="POST" action="{{URL::action('UsuariosController@store') }}" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{!! csrf_token() !!}">
					<div class="form-group">
						<label class="mr-sm-2" form="nombre">Nombre: </label>
						<input class="form-control mb-2 mr-sm-2" {{ $errors->has('email') ? 'has-error' : '' }}" 
								type="text"
								name="nombre"
								onkeyup="mayus(this);"
								placeholder="Ingresa tu Nombre completo, emepezando por apellidos"
								value="{{ old('nombre') }}">
					</div>
					<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }} ">
						<label class="mr-sm-2" form="email">Email: </label>
						<input class="form-control mb-2 mr-sm-2"" 
								type="email"
								name="email"
								placeholder="Ingresa tu Email"
								value="{{ old('email') }}">
								<small>*Asegurate de que tu email este escrito correctamente</small>
					</div>
					
					<div class="form-inline {{ $errors->has('email') ? 'has-error' : '' }} ">
						<label class="mr-sm-2" form="edad">Edad: </label>
						<input class="form-control mb-2 mr-sm-2" " 
								type="text"
								name="edad"
								placeholder="Edad"
								maxlength="2"
								value="{{ old('edad') }}">
								<br>
								<label class="mr-sm-2"s form="sexo">Sexo: </label>
						<input class="form-control mb-2 mr-sm-2"" 
								type="text"
								name="sexo"
								onkeyup="mayus(this);"
								placeholder="Sexo (H o M)"
								value="{{ old('sexo') }}">

								<label class="mr-sm-2" form="escolaridad">Escolaridad: </label>
						<input class="form-control mb-2 mr-sm-2"" 
								type="text"
								name="escolaridad"
								onkeyup="mayus(this);"
								placeholder="Escolaridad"
								value="{{ old('escolaridad') }}">
					</div><br>

						<div class="form-group">
						<label form="">Foto: </label>
						<input class="form-control-file" type="file" name="photo" required><br>
						<small>*Visita el siguiente enlace para saber como debes subir tu foto*</small><br>
						<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalLong">Como subir tu Foto</button>
					</div>
					<br>
				<center><button class="btn btn-primary">Acceder</button></center>
				</form><br>
				
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