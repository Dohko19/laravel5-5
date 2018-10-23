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
			
	</div>
		
	<hr>
	</div>
	<div class="col-lg-10 col-lg-offset-1">
				<ul class="nav nav-tabs">
		  
		  <li class="nav-item">
		    <a class="nav-link " data-toggle="tab" href="#i">Datos Generales</a>
		  </li>
		  <li class="nav-item active">
		    <a class="nav-link" data-toggle="tab" href="#s">Grafica</a>
		  </li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
		  <div class="tab-pane container fade col-lg-12" id="i">
		  		<div class="table-responsive-sm-md-lg-xl">
		<table class="table table-sm table-hover" cellspacing="0" width="100%" >
			<thead class="thead-light">
				<tr>
					<th width="10" scope="col">#</th>	
					<th scope="col">Nombre:</th>	
					<th scope="col">Email:</th>	
					<th scope="col">Creado el:</th>	
					<th scope="col">S <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></th>	
					<th scope="col">I <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></th>
					<th scope="col">P <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></th>
					<th scope="col">A <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></th>
					<th scope="col">R <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></th>
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
		  </div>

		  <div class="tab-pane container active" id="s">
		  	@foreach ($usuario as $u)
			<canvas id="resgraf{{ $u->id_usu }}" width="100" height="40"></canvas><br>
			<center><button id="downloadBtn" class="btn btn-outline-danger">Descargar PDF</button></center>
		@endforeach
		</div>
		<!--Siguiente navs pesta{as-->
	</div>
	<br>
	<div class="col-lg-10 col-lg-offset-1">
		<!--Graficas --> 
		<a class="btn btn-warning" href="{{ route('resultado') }}">Regresar</a>
		<br>
		
	</div>
	</div>
</div>
</div>
@section('javascript')
	<script>
		$(document).ready(function(){
	var downloadBtn = document.getElementById('downloadBtn');	
	var canvas = document.getElementById("resgraf{{ $u->id_usu }}");
	var ctx = document.getElementById("resgraf{{ $u->id_usu }}").getContext('2d');
	var grafica = new Chart(
		ctx, {
    type: 'polarArea',
    data: {
        labels: ["Sintentico {{ $s }}", "Idealista {{ $i }}", "Pragmatico {{ $p }}", "Analitico {{ $a }}", "Realista {{ $r }}"],
        datasets: [{
            label: 'Tipo de Pensamiento{{ $u->id_usu }}',
            data: [{{ $s }}, {{ $i }}, {{ $p }}, {{ $a }}, {{ $r }}],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
});

downloadBtn.addEventListener("click", function() {
      var d = new Date();
      var n = d.toISOString();
      // only jpeg is supported by jsPDF
      var imgData = canvas.toDataURL("image/png", 1.0);
      var pdf = new jsPDF();
	  pdf.text(10,10,'El arte de pensar');
      pdf.addImage(imgData, "JPEG", 10, 20,200,90);
      pdf.save("{{ $u->id_usu }}-"+n+"-{{ $u->nombre }}.pdf");
    }, false);
  });

</script>
@endsection
@endsection