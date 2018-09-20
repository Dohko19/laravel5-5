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
	

    <!----------------------------------------->
	<!-- Bootstrap -->
	
<div class="row">
	<div class="col-md-9 col-md-offset-1">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h1 class="panel-title">Acceso al Test</h1>
			</div>
			<div class="panel-body"><!--
				{!! Form::open() !!}
				<div class="form-group">
					{!! Form::label('Nombre:') !!}
					{!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa tu Nombre Completo']) !!}
				</div>
				{!! Form::close() !!}-->
				<form method="POST" action="{{URL::action('UsuariosController@store') }}">
					<input type="hidden" name="_token" value="{!! csrf_token() !!}">
					<div class="form-group">
						<label form="nombre">Nombre: </label>
						<input class="form-control" 
								type="text"
								name="nombre"
								placeholder="Ingresa tu Nombre completo, emepezando por apellidos">
					</div>
					<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }} ">
						<label form="nombre">Email: </label>
						<input class="form-control" 
								type="email"
								name="email"
								placeholder="Ingresa tu Email">
								{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
					</div>
					<small>*Asegurate de que tu email este escrito correctamente</small>
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

	
@endsection