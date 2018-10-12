<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/images/ic_svl_iconapp.png" />
    {{ Html::style('/css/bootstrap.min.css') }}
    {{ Html::style('/css/app.css') }}
    {{ Html::style('/css/jquery.dataTables.css') }}
    {{ Html::style('/css/zoom.css') }}
    {{ Html::style('/css/jquery.dataTables.min.css') }}
    {{ Html::style('/css/all.css') }}
	  <title> Tipos de Pensamiento - SolexVintel</title>
</head>
<header>
  <?php function activeMenu($url){
    return request()->is($url) ? 'active' : '';
  } ?>
</header>
<body>
<div class="container">
	<hr>
  <nav class="navbar fixed-top navbar-light bg-light"> 
          <img src="/images/logo_solexvintel.png">
        </nav>
	<div class="container">
		<div class="row">
			<div class="col-5-md-6">
				<br><br>
			</div>
			<div class="col-9">
				<div class="container">
						
					<nav class=" navbar navbar-expand-sm navbar-light" style="background-color: #e3f2fd;">
						<a class="navbar-brand" href="#">
							<img src="/images/ic_svl_iconapp.png" width="30" height="30" alt="">
						</a><h3>Solvexintel</h3>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="{{URL::action('UsuariosController@index') }}">Inicio<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Acciones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if(auth()->check())
          <a class="dropdown-item" href="{{URL::action('UsuariosController@resultado') }}">Resultados</a>     
          @endif   
          @if(auth()->guest())
          <a class=" {{ activeMenu('login') }} dropdown-item" href="{{ URL::action('Auth\LoginController@showloginForm') }}">Ver Resultados</a>
         @endif
        </div>

      </li>
     
    </ul>
  </div>

  <ul class="navbar-nav">
    @if(auth()->check())
    <li><button type="button" class="btn btn-outline-warning">
      <a  href="/logout" >Cerrar sesión de {{ auth()->user()->name }}</a>
      </button>
    </li>
    @endif
  </ul>
</nav>

</div>
	@yield('content')
	
<!-- scripts para la seccion App  -->
    {{ Html::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}
    {{ Html::script('/js/app.js') }}
    {{ Html::script('/js/datatable.js') }}
    {{ Html::script('/js/jquery3.3.1.min.js') }}
    {{ Html::script('/js/bootstrap.min.js') }}
    {{ Html::script('/js/jquery-3.3.1.slim.min.js') }}
    {{ Html::script('/js/popper.min.js') }}
    {{ Html::script('/js/jquery-3.3.1.js') }}
    {{ Html::script('/js/jquery.dataTables.js') }}
    {{ Html::script('/js/popper.min.js') }}
    {{ Html::script('/js/all.js') }}
<!-- End Scripts -->
  <div id="popUp" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="userimg">
  <div id="caption"></div>
</div>
<script>
$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});
</script>
<script>
  $(document).ready( function () {
    $('#users').DataTable({
      "procesing": true,
      "serverside": true,
       responsive: true,
      "ajax": '{{ route('datatable/getdata') }}',
      "columns":[ 
        {data: 'id_usu', name: 'id_usu'}, 
        {data: 'nombre', name: 'nombre'},
        {data: 'email', name: 'email'},
        {data: 'edad', name: 'edad'},
        {data: 'sexo', name: 'sexo'},
        {data: 'escolaridad', name: 'escolaridad'},
        {data: 'photo', name: 'photo',
            render: function(data, type, full, meta){
              return "<img src=\"/imageuser/"+data+"\" height=\"60\"/>";
            }
          },
        {data: 'created_at', name: 'created_at'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
      ],
      order: [[1, 'asc']]
    });

} );
</script> 
<!-- Fin scripts -->
    <div class="container">
        <hr>
    <footer>Copyright© {{ date('Y') }} Trejo Rojas Daniel Arturo - <a onclick="alert('Autor: Trejo Rojas Daniel Arturo para solexvintel, Esto es una BETA')" href="#">Beta v0.1</a>
     </footer>
  </div>
</div>
</body>
</html>