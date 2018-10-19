@extends('layouts.app')
@section('content')
<head>

</head>
<div class="row">
	<div class="container"> 
		<div class="col-4">
			
		</div>
			<div class="col-lg-5 col-lg-offset-3">
			@foreach($usuario as $usu)
			<div class="card bg-light" style="width: 500">
				<img class="card-img-top img-fluid" src="/imageuser/{{ $usu->photo }}" alt="Imagen de {{ $usu->nombre }}">
			</div><br>
		
		@endforeach
		</div>
		<div class="col-lg-10 col-lg-offset-1">
			<div class="table-responsive-sm-md-lg-xl">
		<table class="table table-sm table-hover" cellspacing="0" width="100%" >
			<thead class="thead-light">
				<tr>
					<th width="10" scope="col">#</th>	
					<th scope="col">Nombre:</th>	
					<th scope="col">Email:</th>	
					<th scope="col">Creado el:</th>	
					<th scope="col">S</th>	
					<th scope="col">I</th>
					<th scope="col">P</th>
					<th scope="col">A</th>
					<th scope="col">R</th>
					<th scope="col">Total</th>
					<th></th>
				</tr>
			</thead>
			@foreach($usuario as $usu)
			<tbody>
				<th class="table-info" scope="row">{{ $usu->id_usu }}</th>
				<td class="table-info">{{ $usu->nombre }}</td>
				<td class="table-info">{{ $usu->email }}</td>
				<td class="table-info">{{ $usu->created_at }}</td>
				<td class="table-info">@if($s>=60)
					<h3><span class="label label-success">{{ $s }}</span></h3>
					@elseif($s<60)
					<h3><span class="label label-warning">{{ $s }}</span></h3>
					@else
					<h3><span class="label label-default">{{ $s }}</span></h3>
					@endif
				</td>
				<td class="table-info">
					@if($i>=60)
					<h3><span class="label label-success">{{ $i }}</span></h3>
					@elseif($i<60)
					<h3><span class="label label-warning">{{ $i }}</span></h3>
					@else
					<h3><span class="label label-default">{{ $i }}</span></h3>
					@endif
				</td>
				<td class="table-info">
					@if($p>=60)
					<h3><span class="label label-success">{{ $p }}</span></h3>
					@elseif($p<60)
					<h3><span class="label label-warning">{{ $p }}</span></h3>
					@else
					<h3><span class="label label-default">{{ $p }}</span></h3>
					@endif
				</td>
				<td class="table-info">
					@if($a>=60)
					<h3><span class="label label-success">{{ $a }}</span></h3>
					@elseif($a<60)
					<h3><span class="label label-warning">{{ $a }}</span></h3>
					@else
					<h3><span class="label label-default">{{ $a }}</span></h3>
					@endif
				</td>
				<td class="table-info">
					@if($r>=60)
					<h3><span class="label label-success">{{ $r }}</span></h3>
					@elseif($r<60)
					<h3><span class="label label-warning">{{ $r }}</span></h3>
					@else
					<h3><span class="label label-default">{{ $r }}</span></h3>
					@endif
				</td>
				<td class="table-success"><h3>{{  $total }}</h3></td>
				<td class="table-danger">
					<form method="POST" action="{{ route('email') }}">
					{!! csrf_field() !!}

				<input type="hidden" name="id" value="{{ $usu->id_usu }}"><br>
				<button class="btn btn-danger btn-sm">Re-enviar Correo</button>
					</form></td>
			</tbody>
			@endforeach
		</table>
	</div>
		<a class="btn btn-danger btn-xs" href="{{ route('resultado') }}">Regresar</a>
	<hr>
	</div>
	<div class="col-lg-10 col-lg-offset-1">
				<ul class="nav nav-tabs">
		  <li class="nav-item">
		    <a class="nav-link active" data-toggle="tab" href="#s">Sintetico</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#i">Idealista</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#p">Pragmatico</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#a">Analitico</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#r">Realista</a>
		  </li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
		  <div class="tab-pane container active" id="s">Pensamiento Sintetico</div>
		  <div class="tab-pane container fade" id="i">Pensamiento Idealista</div>
		  <div class="tab-pane container fade" id="p">Pensamiento Pragmatico</div>
		  <div class="tab-pane container fade" id="a">Pensamiento Analitico</div>
		  <div class="tab-pane container fade" id="r">Pensamiento Realista</div>
		</div>
	</div>
	</div>
</div>
</div>
@endsection