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
            <div class="center-block">
<nav class="navbar navbar-expand-sm navbar navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="{{ route('registro') }}">
              <img src="/images/ic_svl_iconapp.png" width="30" height="30" alt="">
            </a><h3>Solvexintel</h3>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto-xs mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link navbar-brand" href="{{URL::action('UsuariosController@index') }}">Inicio<span class="sr-only">(current)</span></a>
      </li>
        @if(auth()->check())
      <li class="nav-item active ">
          <a class="nav-link" href="{{URL::action('UsuariosController@resultado') }}">Ver resultados</a>  
      </li>
         @endif  
        </ul>
  </div>

  <ul class="navbar-nav">
    @if(auth()->guest())
      <li>   
          <a class="nav-link navbar-brand {{ activeMenu('login') }}" href="{{ URL::action('Auth\LoginController@showloginForm') }}">Login</a>
      </li>
    @endif
    
    @if(auth()->check())
    <li>
      <a href="/logout" >Cerrar sesión de {{ auth()->user()->name }}</a>
    </li>
    @endif
  </ul>
</nav>
        <nav class="navbar fixed-top navbar-light bg-light"> 
          <img src="/images/logo_solexvintel.png">
        </nav>
{{-- <div class="container">
   <div class="row">
        <div class="col-5-md-6">
          <br><br>
        </div>
  <div class="col-lg-10 col-lg-offset-1">

</div>
</div>
</div> --}}
	@yield('content')
	
<!-- scripts para la seccion App  -->
    {{ Html::script('/js/jquery.min.js') }}
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