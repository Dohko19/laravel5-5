@extends('layouts.catellay')
@section('content')
<div class="row">
	<div class="col-xs-6 col-sm-2">
	</div>
		<div class="col-xs-8 col-sm-8">
<div class="panel panel-primary">
	<div class="panel-heading">
		<center><h3>Introducción PDP</h3></center>
		</div>
		<div class="panel-body">
			<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  				<div class="toast-header">
   			 {{-- <img src="..." class="rounded mr-2" alt="..."> --}}
   			 <strong class="mr-auto">PDP Cuestionario</strong>
   			 {{-- <small class="text-muted">just now</small> --}}
   			 {{-- <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close"> --}}
     		 {{-- <span aria-hidden="true">&times;</span> --}}
   			 {{-- </button> --}}
  				</div>
 		 <div class="toast-body">
    <h4><p>Datos de Registro</p>
    <p>Por favor llenar todos los campos asi como integrar su fotografia</p></h4>
 		 </div>
 		 <p><span style="color: red;">* Obligatorio</span></p>
			</div>
			<form action="{{ route('catel.store') }}" method="POST">
				{!! csrf_field() !!}
				<div class="form-group mb-2 mr-sm-2 {{ $errors->has('nombre') ? 'has-error' : '' }}">
				<p><label for="name">
					Nombre:</label>
					<input placeholder="Tu respuesta"
							 type="text"
							 name="name"
							 class="form-control"
							 value="{{ $user->nombre ?? old('name') }}">
					{!! $errors->first('name', '<span class=error>:message</span>') !!}
				</label></p>
				</div>

				<div class="form-group mb-2 mr-sm-2 {{ $errors->has('email') ? 'has-error' : '' }}">
				<p><label for="email">
					Email:<span style="color: red;">*</span>:</label>
					<input placeholder="Tu respuesta" type="email" name="email" class="form-control" value="{{ $user->email ?? old('email') }}" required>
					{!! $errors->first('email', '<span class=error>:message</span>') !!}
				</p>
				</div>

				<div class="form-group mb-2 mr-sm-2 {{ $errors->has('telefono') ? 'has-error' : '' }}">
				<p><label for="telefono">
					Numero telefonico de Contacto <span style="color: red;">*</span>:</label>
					<input placeholder="Tu respuesta" type="text" name="telefono" class="form-control" value="{{ $user->telefono ?? old('telefono') }}" required  pattern="[0-9]+">
					{!! $errors->first('telefono', '<span class=error>:message</span>') !!}
				</p>
				</div>

				<div class="form-group mb-2 mr-sm-2 {{ $errors->has('edad') ? 'has-error' : '' }}">
				<p><label for="edad">
					Edad:</label>
					<input placeholder="Tu respuesta" type="text" name="edad" class="form-control" value="{{ $user->edad ?? old('edad') }}" pattern="[0-9]+">
					{!! $errors->first('edad', '<span class=error>:message</span>') !!}
				</p>
				</div>

				<div class="form-group mb-2 mr-sm-2 {{ $errors->has('gradoe') ? 'has-error' : '' }}">
				<p><label for="gradoe">
					Grado Educativo:</label>
					<input placeholder="Tu respuesta" type="text" name="gradoe" class="form-control" value="{{ $user->gradoe ?? old('gradoe') }}">
					{!! $errors->first('gradoe', '<span class=error>:message</span>') !!}
				</p>
				</div>

				<div class="form-group mb-2 mr-sm-2 {{ $errors->has('puestotrabajo') ? 'has-error' : '' }}">
				<p><label for="puestotrabajo">
					Ocupación o puesto de trabajo<span style="color: red;">*</span>:</label>
					<input placeholder="Tu respuesta" type="text" name="puestotrabajo" class="form-control" value="{{ $user->puestotrabajo ?? old('puestotrabajo') }}" required>
					{!! $errors->first('puestotrabajo', '<span class=error>:message</span>') !!}
				</p>
				</div>

				<div class="form-group mb-2 mr-sm-2 {{ $errors->has('sexo') ? 'has-error' : '' }}">
				<p><label for="sexo">
					Sexo:</label>
					<input placeholder="Tu respuesta" type="text" name="sexo" class="form-control" value="{{ $user->sexo ?? old('sexo') }}" pattern="[A-Za-z]+">
					{!! $errors->first('sexo', '<span class=error>:message</span>') !!}
				</p>

				<div class="form-group mb-2 mr-sm-2 {{ $errors->has('empesc') ? 'has-error' : '' }}">
				<p><label for="empesc">
					Nombre de la Empresa o Escuela <span style="color: red;">*</span>:</label>
					<input placeholder="Tu respuesta" type="text" name="empesc" class="form-control" value="{{ $user->empesc ?? old('empesc') }}" required>
					{!! $errors->first('empesc', '<span class=error>:message</span>') !!}
				</p>
				</div>

				<div class="form-group {{ $errors->has('estadocivil') ? 'has-error' : '' }}">
				<label for="estadocivil">
					Estado Civil:
					</label>
					<input placeholder="Tu respuesta" type="text" name="estadocivil" class="form-control" value="{{ $user->estadocivil ?? old('estadocivil') }}" pattern="[A-Za-z]+">
					{!! $errors->first('estadocivil', '<span class=error>:message</span>') !!}

			</div>
				<br>
				<button type="submit" class="btn btn-primary">Enviar</button>


				 <div class="form-group">
			</form>
		</div>
			</div></div></div></div>
		</div>
	</div>
	<div class="col-xs-6 col-sm-3">

</div>
</div>
</div>
@endsection