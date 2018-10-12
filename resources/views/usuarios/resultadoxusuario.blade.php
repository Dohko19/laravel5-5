@extends('layouts.app')
@section('content')
<head>

</head>
<div class="row">
	@foreach($usuario as $usu)
	<div class="col-md-12 col-md-offset-1">
		<div class="col-sm">
			<div class="card bg-light" style="width: 500">
				<img class="card-img-top" src="/imageuser/{{ $usu->photo }}" alt="">
				<div class="card-body">
					<h5 class="card-title card-block">{{ $usu->nombre }}</h5>
				</div>
			</div>
		</div>
		@endforeach
		
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th scope="col">#</th>	
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
				<th scope="row">{{ $usu->id_usu }}</th>
				<td>{{ $usu->nombre }}</td>
				<td>{{ $usu->email }}</td>
				<td>{{ $usu->created_at }}</td>
				<td>@if($s>=60)
					<h3><span class="label label-success">{{ $s }}</span></h3>
					@elseif($s<60)
					<h3><span class="label label-warning">{{ $s }}</span></h3>
					@else
					<h3><span class="label label-default">{{ $s }}</span></h3>
					@endif
				</td>
				<td>
					@if($i>=60)
					<h3><span class="label label-success">{{ $i }}</span></h3>
					@elseif($i<60)
					<h3><span class="label label-warning">{{ $i }}</span></h3>
					@else
					<h3><span class="label label-default">{{ $i }}</span></h3>
					@endif
				</td>
				<td>
					@if($p>=60)
					<h3><span class="label label-success">{{ $p }}</span></h3>
					@elseif($p<60)
					<h3><span class="label label-warning">{{ $p }}</span></h3>
					@else
					<h3><span class="label label-default">{{ $p }}</span></h3>
					@endif
				</td>
				<td>
					@if($a>=60)
					<h3><span class="label label-success">{{ $a }}</span></h3>
					@elseif($a<60)
					<h3><span class="label label-warning">{{ $a }}</span></h3>
					@else
					<h3><span class="label label-default">{{ $a }}</span></h3>
					@endif
				</td>
				<td>
					@if($r>=60)
					<h3><span class="label label-success">{{ $r }}</span></h3>
					@elseif($r<60)
					<h3><span class="label label-warning">{{ $r }}</span></h3>
					@else
					<h3><span class="label label-default">{{ $r }}</span></h3>
					@endif
				</td>
				<td><h3>{{  $total }}</h3></td>
				<td><form method="POST" action="{{ route('email') }}">
					{!! csrf_field() !!}

				<input type="hidden" name="id" value="{{ $usu->id_usu }}">
				<button class="btn btn-success btn-sm">Re-enviar Correo</button>
					</form></td>
			</tbody>
			@endforeach
		</table>

		<a class="btn btn-danger btn-xs" href="{{ route('resultado') }}">Regresar</a>
	</div>
</div>

@endsection