<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>TEST</title>
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
	

	<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    
</head>
<header>
  <?php function activeMenu($url){
    return request()->is($url) ? 'active' : '';
  } ?>
</header>
<body>
<div class="container">
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-5-md-6">
				<br><br>
			</div>
			<div class="col-9">
				<div class="container">
						
					<nav class=" navbar navbar-expand-sm navbar-light" style="background-color: #e3f2fd;"">
						<a class="navbar-brand" href="">
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
          <a class=" {{ activeMenu('login') }} dropdown-item" href="/login">Ver Resultados</a>
         @endif
        </div>

      </li>
      <li class="nav-item">
        <a class="nav-link disabled" onclick="alert('Autor: Trejo Rojas Daniel Arturo para solexvintel, Esto es una BETA')" href="#">Beta v0.1</a>
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
	

<!-- Jquery-2.2.4 JS -->
    <script src="js/app.js"></script>
    <script src="js/datatable.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <div class="container">
        <hr>
    <footer>Copyright© {{ date('Y') }} Trejo Rojas Daniel Arturo</footer>
  </div>
</div>
</body>
</html>