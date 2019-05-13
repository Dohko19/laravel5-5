@extends('layouts.catellay')
@section('content')
<div class="container-fluid">
<div class="row">
	<div class="col-xs-6 col-sm-3">
	</div>
		<div class="col-xs-6 col-sm-6">
<div class="panel panel-primary">
	<div class="panel-heading">
		<center><h3>Introducción PDP</h3></center>
		</div>
			<div class="panel-body" >
		<p>PDP es una plataforma digital encargada de medir rasgos de personalidad específicos bajo un enfoque NOVEDOSO y con una propuesta amigable e interactiva , ya que desde la comodidad de un ordenador, computadora, Tablet o celular podrás hacer el llenado de un cuestionario digital de opción múltiple que consta de 185 reactivos o preguntas clave con un lenguaje fácilmente comprensible, es en suma un cuestionario bien organizado, escrito con claridad y de fácil llenado (opción múltiple ), las preguntas reflejan problemas comunes y tendencias prácticas. Cabe señalar que no existen respuestas Negativas, todas son válidas.</p>

		<p>Cada uno de nosotros tiene su propia forma de ser. Observamos el mundo de determinada manera, nos relacionamos con los demás de formas concretas y, en general, expresamos una tendencia a hacer determinadas cosas y a responder de maneras más o menos estables. Dicho de otra manera, y aunque suene redundante, cada persona tiene su propia personalidad.</p>

		<p>Esta personalidad  es un elemento estable y consistente que se va generando a lo largo de la vida de cada persona, forjándose especialmente desde la infancia hasta el inicio de la edad adulta mediante una combinación de elementos biopsicosociales (la genética, el entorno y las vivencias de cada persona).  La personalidad puede variar en algún aspecto en respuesta a situaciones y evoluciones vitales concretas, pero por lo general se mantiene a lo largo del ciclo vital, observándose constante en la mayor parte de los ámbitos y a través de las diferentes situaciones que vivimos. Esto no quiere decir que aspectos concretos sean inmodificables, pero requiere de un elevado nivel de esfuerzo y trabajo, manteniéndose en general el conjunto de características que configuran la personalidad.</p>

		<p>La participación tuya en el llenado de este cuestionario te permitirá conocer un INFORME INTERPRETATIVO de manera científica y más profunda tu perfil de personalidad, con ello conocerás tus áreas de fortaleza y potencializaras tus áreas de oportunidad en diferentes campos de aplicación tanto personal como profesional.</p>

		<p>EL informe interpretativo no ofrece necesariamente un retrato completo de la personalidad del sujeto; El informe se refiere a un tema específico dentro de un contexto también específico.</p>
		
		<a href="{{ route('index2') }}" class="btn btn-primary">Siguiente</a>

		{{-- <p><h3><b>Direccion de Correo Electronico</b><span style="color:red; ">*</span></p></h3> --}}
		{{-- <form method="POST" action="{{ route('catel.store') }}">
		<div class="form-group {{ $errors->has('correo') ? 'has-error' : '' }}">
						
						<input class="form-control mb-2 mr-sm-2 " 
								type="text"
								name="correo"
								onkeyup="mayus(this);"
								placeholder="Tu dirección de correo electronico"
								value="{{ old('correo') }}"
								required>

					</div>
					<button class="btn btn-primary">Siguiente</button>
		</form> --}}

				</div>
		</div>
	</div>
</div>

</div>

@endsection