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
			<div class="panel-body" style="min-height: 20; max-height: 25;">

			<div class="alert alert-primary" role="alert">
			  <center><b><h3>Aviso de Privacidad</h3></b></center>
			  </div>
			  <div class="panel-body">
			    <p>Aviso de Privacidad integral del estudio de VALIDACIÓN DE LA PLATAFORMA DIGITAL DE PERSONALIDAD “PDP”.</p>
				<p>SOLEXVINTEL S.A de C.V, Guillermo González Camarena No.1600 Piso 5, Santa Fe, Delegación. Álvaro Obregón, CDMX, CP 01376, será el responsable del tratamiento de los datos personales que nos proporcionen, los cuales serán protegidos conforme a lo dispuesto por la Ley 316 de Protección de Datos Personales en Posesión de Sujetos Obligados, y de más normatividad que resulte aplicable.</p>

				<p>FINALIDADES DEL TRATAMIENTO </p>

				<p>Los datos personales recabados los utilizaremos para las siguientes finalidades:</p>
				<p>-	Los resultados serán utilizados para observar el comportamiento de una población estudiantil, que nos permita obtener características más sensibles y específicas, utilizadas en la “PDP”, así como el uso de dichos resultados para valuaciones estadísticas.</p>

				<p>-  Los datos personales recabados nos permitirán conocer el comportamiento de la población estudiantil, permitiéndonos agrupar e identificar grupos específicos de personalidades características, pudiendo elaborar estadísticas sobre dicha población. </p>


				<p>DATOS PERSONALES RECABADOS </p>

				<p>Para las finalidades antes señaladas, se solicitarán los siguientes datos personales:
				Mail, edad, sexo, puesto/grado escolar, empresa/escuela.
				El mail se utilizara únicamente para el envió del resultado.
				El nombre no es necesario, esta prueba es completamente anónima, en el sentido de que no se busca conocer la identidad del participante. En caso de optar por brindar su nombre, puede poner sus iniciales o bien, un seudónimo que usted identifique como propio.</p>

				<p>Adicionalmente, se recabara su fotografía con ciertas especificaciones técnicas, la cual es indispensable para esta validación.  Su uso sera única y exclusivamente para la obtención de datos morfométricos, necesarios en la plataforma. La fotografía no quedará asociada con los datos proporcionados, ésta sera borrada del sistema al quedar validadas las características generales del grupo.</p>
				<p>TRANSFERENCIA DE DATOS PERSONALES </p>

				<p>Sus datos personales y fotografía NO SERÁN compartidos con personas, empresas, organizaciones y/o autoridades y su uso se reservará UNICAMENTE para los fines anteriormente mencionados.</p>


				<p>Si está de acuerdo con lo descrito anteriormente, favor de ACEPTAR dando "click" en SIGUIENTE, para ingresar su correo y continuar con el cuestionario.
				¡¡Agradecemos su participación!!</p>
			</div>
			<br>
			<div style="float: left;">
			<a href="{{route('index2')}}" class="btn btn-danger">Atras</a>
				<a class="btn btn-primary" href="{{ route('registro') }}">Siguiente</a>
			</div>
			{{-- <div>
			<div class="progress" style="height: 10px;">
			  <div class="progress-bar progress-bar-striped progress-bar-animated col-xs-6" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
			</div>
			</div> --}}
		</div>
		</div>
	</div>
</div>

</div>
<footer>
<div style="align-content: right;">

</div></footer>
@endsection