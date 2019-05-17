@extends('layouts.catellay')
@section('content')
<div class="container-fluid">
<div class="row">
	<div class="col-xs-6 col-sm-2">
	</div>
		<div class="col-xs-8 col-sm-8">
<div class="panel panel-primary">
	<div class="panel-heading">
		<center><h3>Introducción PDP</h3></center>
		</div>
			<div class="panel-body">

			<div class="alert alert-primary" role="alert">
			  <center><b><h3>Consentimiento Informado</h3></b></center>
			</div>
			<p>Se le invita a participar en el estudio de validación de la Plataforma Digital de Personalidad “PDP”. Este proyecto es realizado por SOLEXVINTEL SA de CV y DELMARK SA de CV.</p>
			<p>El propósito de la validación, es establecer un proceso de correlación de la plataforma “PDP”, con tests Psicológicos abiertos de Personalidad. </p>
			<p>Formar parte de este estudio es voluntario. En esta validación, con fines de investigación, participan aquellos individuos que por su libre voluntad desean hacerlo. Aún cuando acepte colaborar, se tiene la libertad de abandonar el estudio en cualquier momento y si decide no participar, no tiene consecuencia alguna.</p>
			<p>Acerca de tu participación en este estudio. Si está de acuerdo en participar, se pedirá responder un test conformado por 185 preguntas de opción múltiple. Es importante tomarse el tiempo necesario para leer cuidadosamente cada reactivo y responda de la forma mas honesta posible. Recuerde que no existen respuestas correctas ni incorrectas.</p>
			<p>Su confidencialidad será protegida en todo momento. Ninguna información compartida, será divulgada ni compartida con terceros, así como tampoco será identificada con su nombre. La información obtenida será analizada y calificada únicamente para fines de validación y/o fines estadísticos, manteniendo en todo momento la confidencialidad de su participación.</p>
			<p>En este estudio, no se contempla ningún tipo de efecto negativo como resultado de su participación. </p>
			<p>Si tiene alguna duda y/o pregunta acerca del estudio, puede contactar al Lic. Rubén de la Rosa Serrano, <b><a href="#">rubeneconomia@hotmail.com</a></b></p>
			<p>En caso de dar su consentimiento, favor de aceptar dando "click" en SIGUIENTE y continuar con el cuestionario.</p>

			<p><a class="btn btn-danger" href="{{ route('catel.index') }}">Atras</a>
				<a class="btn btn-primary" href="{{ route('avisoprivacidad') }}">Siguiente</a></p>
				</div>
		</div>
	</div>
</div>

</div>

@endsection