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
    {{ Html::style('/css/buttons.dataTables.min.css') }}
    {{ Html::style('/css/dropzone.min.css') }}

    <style>
    	.fixed-panel {
height: 100px;
  overflow-y: scroll;
					}
    </style>
</head>
	<title>Encuesta de Catel</title>

<body>
	<div class="container">
	@yield('content')
	<hr>
	</div>
     <footer>Copyright© {{ date('Y') }} Trejo Rojas Daniel Arturo - <a onclick="alert('Autor: Trejo Rojas Daniel Arturo para solexvintel, Esto es una BETA')" href="#">Beta v0.1</a>
     </footer>
</body>

</html>