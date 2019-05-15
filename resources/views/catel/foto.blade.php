@extends('layouts.catellay')
@section('content')
<div class="row">
	<div class="col-xs-6 col-sm-2">
	</div>
		<div class="col-xs-8 col-sm-8">
<div class="panel panel-primary">
	<div class="panel-heading">
		<center><h3>Fotografia</h3></center>
		</div>
		<div class="panel-body">
			{{-- <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  				<div class="toast-header"> --}}
   			 {{-- <img src="..." class="rounded mr-2" alt="..."> --}}
   			 {{-- <strong class="mr-auto"></strong> --}}
   			 {{-- <small class="text-muted">just now</small> --}}
   			 {{-- <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close"> --}}
     		 {{-- <span aria-hidden="true">&times;</span> --}}
   			 {{-- </button> --}}
  				{{-- </div>

			</div> --}}
			{{-- Contenido --}}
			<p>Para efectos de llevar un control mas exacto de los participantes pedimos de su cooperaciòn para anexar cinco fotografias en la parte de abajo, pueden ser tipo SELFIES (con las especificaciones abajo referidas) tambien puedes subir fotografias tamaño infantil, credencial, pasaporte o tomar la fotografia de alguna credencial donde tu imagen sea nitida . En el area donde dice SUBIR FOTO / CARGA DE ARCHIVOS puede anexarla. la plataforma de permite subirlas desde tu carrete del celular, tu carpeta de imagenes en la computadora o desde algun otro sitio.</p>

			<p>NOTA: SE PIDE SUBIR CINCO IMAGENES Y EN CASO DE QUE TENGAMOS ALGUN PROBLEMA CON LA IMAGEN O NO SE PUEDA VISUALIZAR , TE LLAMAREMOS A TU NUMERO DE CONTACTO PARA PEDIR EL REENVIO. </p>

			<h3><p>Ejemplos de fotografias validas: </p></h3>
			<div style="text-align: center;">
				<div class="card" style="width: 58rem;">
				  <img src="/images/foto_2.png" class="card-img-top" alt="...">
				  <div class="card-body">
				    <p class="card-text"></p>
				  </div>
				</div>
				<br>
				<div class="card" style="width: 58rem;">
				  <img src="/images/foto_3.png" class="card-img-top" alt="...">
				  <div class="card-body">
				    <p class="card-text"></p>
				  </div>
				</div>
			</div>
				<form action="{{ route('CatelFoto.store') }}" method="POST" enctype=”multipart/form-data”>
					{!! csrf_field() !!}
				<input type="hidden" id="id" name="id" value="{{ $id }}" readonly="readonly">
				<p><h2><b>Subir Foto</b></h2></p>
				<div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
						<label form="photo">Foto: </label>
						<input class="form-control-file" type="file" name="photo" id="photo" value="{{ old('photo') }}" required><br>
					</div>
					<button class="btn btn-primary">Siguiente</button>
				</form>
			</div>
			</div></div></div></div>
		</div>
	</div>
	<div class="col-xs-6 col-sm-3">

</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Instrucciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p> A continuación encontrará unas frases que permitirán conocer sus actitudes e intereses <br>
		En general no existen respuestas "Buenas" ni "Malas"... <br>
		Conteste con sinceridad; de esta forma se podrá conocer mejor su forma de ser <br>
		Cada frase contiene tres posibles respuestas (a, b, c); normalmente la alternativa " b " viene con una interrogante (?), <br>
		para ser señalada cuando no es posible decidirse entre la a y la b. <br>
		Para responder emple la siguiente clave: <br>
		Si su respuesta es a, seleccione 1 en el recuadro superior <br>
		Si su respuesta es b, seleccione 2 en el recuadro del medio <br>
		Si su respuesta es c, seleccione 3 en el recuadro inferiorbr
		<br>
		NOTA: No medite su respuesta. Marque la primera que le venga a la mente. <br>
		Si tiene dudas, pregunte al examinador : Gabriela Mejido <br>
		El tiempo promedio de llenado es de 30 a 45 minutos, son un total de 185 preguntas , para obtener un perfil real es <br>necesario contestar todas las preguntas de manera sincera.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>
@endsection