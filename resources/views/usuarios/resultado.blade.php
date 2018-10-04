@extends('layouts.app')
@section('content')
<style>
	img.zoom {
    width: 100px;
    height: 50px;
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    -ms-transition: all .2s ease-in-out;
}
 
.transition {
    -webkit-transform: scale(1.8); 
    -moz-transform: scale(1.8);
    -o-transform: scale(1.8);
    transform: scale(1.8);
}

#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}
</style>
<div class="container">
	<div class="col-1-md-6-xs col-xl-offset-1">
	<div class="table-responsive">
		<table class="table table-striped"  width="100%" id="users">
			<thead>
				<tr>
					<th scope="col" class="table-active">#</th>
					<th scope="col">Nombre</th>
					<th scope="col">Email</th>
					<th scope="col">Edad</th>
					<th scope="col">Sexo</th>
					<th scope="col">Escolaridad</th>
					<th scope="col">Foto</th>
					<th scope="col">Fecha creacion</th>
					<th scope="col">Resultados</th>
				</tr>
			</thead>
			@foreach($usuario as $usu)
		
			<tbody>
				<th>{{ $usu->id_usu }}</th>
				<th>{{ $usu->nombre }}</th>
				<th>{{ $usu->email }}</th>
				<th>{{ $usu->edad }}</th>
				<th>{{ $usu->sexo }}</th>
				<th>{{ $usu->escolaridad }}</th>
				<th><img class="zoom" src="/imageuser/{{ $usu->photo }}" width="100px" alt="Usuario"></th>
				<th>{{ $usu->created_at }}</th>
				<td><a href="{{ URL::action('UsuariosController@verRes', $usu->id_usu) }}"><button class="btn btn-success">Ver Detalles</button></a></td>
				
			</tbody>
			
			@endforeach
		</table>
		</div>
		<br><br><br>
		<a href="{{ route('registro') }}" 
		<button class="btn btn-danger">Regresar</button>
	</a>
	</div>
</div>

{!! $usuario->render() !!}

<div id="popUp" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="userimg">
  <div id="caption"></div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});
</script>
{{--<s cript>
	$(document).ready( function () {
	    $('#users').DataTable({
		    processing: true,
	        serverSide: true,
	        ajax: 'api/users',
	        "columns":[
	        { data: 'id_usu'},
	        { data: 'nombre'},
	        { data: 'email'},
	        { data: 'edad'},
	        { data: 'sexo'},
	        { data: 'escolaridad'},
	        { data: 'photo'},
	        { data: 'created_at'},
	        
	        ],

	        "language": idioma_espanol
	    });
	});
	var idioma_espanol = {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}
</script> --}}
@endsection