@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-8 col-md-offset-1">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h1 class="panel-title">Acceso</h1>
			</div>
			<div class="panel-body">
				<h2>Login</h2>
				<form class="form-inline" action="/login" method="POST">
					{!! csrf_field() !!}
					<input class="form-control" type="email" name="email" placeholder="Email">
					<input class="form-control" type="password" name="password" placeholder="password">
					<button class=" btn btn-primary">Ingresar</button> 
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
