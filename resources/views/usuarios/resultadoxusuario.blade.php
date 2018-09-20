@extends('layouts.app')
@section('content')
<head>

</head>
<div class="row">
	@foreach($usuario as $usu)
	<div class="col-md-12 col-md-offset-1">
		<div class="col-sm">
			<div class="card" style="width: 18rem">
				<img class="card-img-top" src="/imagesuser/{{ $usu->photo }}" alt="">
				<div class="card-body">
					<h5 class="card-title">{{ $usu->nombre }}</h5>

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
				</tr>
			</thead>
			@foreach($usuario as $usu)
			<tbody>
				<th scope="row">{{ $usu->id_usu }}</th>
				<td>{{ $usu->nombre }}</td>
				<td>{{ $usu->email }}</td>
				<td>{{ $usu->created_at}}</td>
				<td>@if($s>=60)
					<h4><span class="label label-success">{{ $s }}</span></h4>
					@elseif($s<60)
					<h4><span class="label label-warning">{{ $s }}</span></h4>
					@else
					<h4><span class="label label-default">{{ $s }}</span></h4>
					@endif
				</td>
				<td>
					@if($i>=60)
					<h4><span class="label label-success">{{ $i }}</span></h4>
					@elseif($i<60)
					<h4><span class="label label-warning">{{ $i }}</span></h4>
					@else
					<h4><span class="label label-default">{{ $i }}</span></h4>
					@endif
				</td>
				<td>
					@if($p>=60)
					<h4><span class="label label-success">{{ $p }}</span></h4>
					@elseif($p<60)
					<h4><span class="label label-warning">{{ $p }}</span></h4>
					@else
					<h4><span class="label label-default">{{ $p }}</span></h4>
					@endif
				</td>
				<td>
					@if($a>=60)
					<h4><span class="label label-success">{{ $a }}</span></h4>
					@elseif($a<60)
					<h4><span class="label label-warning">{{ $a }}</span></h4>
					@else
					<h4><span class="label label-default">{{ $a }}</span></h4>
					@endif
				</td>
				<td>
					@if($r>=60)
					<h4><span class="label label-success">{{ $r }}</span></h4>
					@elseif($r<60)
					<h4><span class="label label-warning">{{ $r }}</span></h4>
					@else
					<h4><span class="label label-default">{{ $r }}</span></h4>
					@endif
				</td>
				<td>{{  $total }}</td>

			</tbody>
			@endforeach
		</table>
		
	</div>
</div>

@endsection