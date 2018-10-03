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
            Completado!
        </ul>
    </div><br />
@endif
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3>Completado</h3>
			</div>
			<div class="panel-body">
				<h2 class="panel-body">Haz Completado el Test</h2>
				<h2>Muchas Gracias por tu participacion, por favor da click en el siguiente boton para terminar. <br>Te enviamos un correo con tus resultados.</h2><center>
					<form method="POST" action="{{ route('email') }}">
					{!! csrf_field() !!}

				<input type="hidden" name="id" value="{{ $id }}">
				<button class="btn btn-success btn-lg">Terminar</button>
					</form>


			</center>
			</div>
		</div>
	</div>
</div>
				
			</div>
			<div class="col">
				
			</div>
		</div>
@endsection