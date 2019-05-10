@extends('layouts.enc')
@section('content')
<div id="contenedor" class="container-fluid">	
	<div  class="row" >
		<div class="col-lg-10-xs-4-md-8-sm-10 col-lg-offset-2">
			<div class="col-9">
					<hr>
					<strong><b>
					<h3 >
						
					<div class="panel panel-default">
					<div class="panel-heading panel-default"><h1>Bienvenido al test de los Tipos de Pensamiento</h1></div>
					<div class="panel-body"><p align="justify">
					Los autores Harrison y Bramson en su libro "El arte del pensamiento" postulan 5 estilos del pensamiento: <b> sintetico, idealista, pragmático, analista y realista. </b>Para conocer tú forma de pensar te invitamos a contestar el siguiente test que consta de 18 preguntas. </p><p align="justify">Cada pregunta tiene 5 posibles respuestas a las cuales deberás colocar un número del 5 al 1 en donde 5 es la que mas te agrada y 1 es la que menos te agrada.</p>
					<p align="justify">Solicitaremos que llenes un formulario y pedimos que coloques correctamente tus datos ya que te enviaremos a tu correo electrónico el resultado.</p>
					<p align="justify"></p><br><br>
					<center>
					<button type="button" class="btn btn-primary btn-lock" data-toggle="modal" data-target="#exampleModalCenter"> Seleccionar Encuesta/Iniciar</button>
					</center>
					</div>
					</div>
					</div>
					</div>
					</h3>
					</b></strong>
					<div class="row justify-content-center">
					<div class="col-7-md-lg-8 text-center">
						<p>
						</p>
					</div>
					</div>
				</div>
		</div>
	</div>
</div>

</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">Elije el tipo de encuesta</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <h2>
       	<a class="btn btn-primary" href="registro">Encuesta Tipos de Pensamiento</a>
       	<br><br>
       	<a href="{{ route('catel.index') }}" class="btn btn-primary">Encuesta Catel</a>
       </h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
@endsection