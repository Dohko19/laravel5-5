@extends('layouts.catellay')
@section('content')
<div class="row">
	<div class="col-xs-6 col-sm-2">
		<a id="myBtn" class='flotante' href='#' ><img src="/images/help.png" border="0" alt="Ayuda!" /></a>
	</div>
		<div class="col-xs-8 col-sm-8">
<div class="panel panel-primary">
	<div class="panel-heading">
		<center><h3>Cuestionario</h3></center>
		</div>
		<div class="panel-body">
			<p>Total de preguntas a contestar 185, el tiempo promedio de llenado es de 30 a 45 minutos, son un total de 185 preguntas , para obtener un perfil real es necesario contestar todas las preguntas de manera sincera.</p><p> Nota en cada pregunta en la <b>Opciòn 2</b> esta un signo de <b>"?"</b> , señale esa opciòn cuando ninguna de las respuestas le parezca congruente con lo que usted piensa. </p>
		<br>	<div>
			<form method="POST" action="{{ route('CatelEncuesta.store') }}">
			{!! csrf_field() !!}
				<div>
					<input type="hidden" name="id" value="{{ $id }}" readonly="readonly">

	<b><h3>1 En un negocio sería  más interesante encargase de</h3></b>
		<input type="hidden" name="pregunta1" value="pregunta1">
		<div class="input-group">
			 <div  class="form-check">
 			 <input name="respuesta1" type="radio" aria-label="" value="A" required> 1.- Las máquinas o llevar registros
			 </div>
			 <div  class="form-check">
 			 <input name="respuesta1" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div  class="form-check">
 			 <input name="respuesta1" type="radio" aria-label="" value="C"> 3.- Entrevistar y hablar con personas
			 </div>
		</div>
 </div>
 <br><br>
 <div>
<b><h3>	 2 Normalmente me voy a dormir sintiéndome satisfecho de cómo ha ido el día</h3></b>
	<input type="hidden" name="pregunta2" value="pregunta2">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta2" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta2" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta2" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>3 Si observo que la línea de razonamiento de otra persona es incorrecta, normalmente</h3></b>
	 <input type="hidden" name="pregunta3" value="pregunta3">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta3" type="radio" aria-label="" value="A" required> 1.- Se lo señalo
			 </div>
			 <div class="form-check">
 			 <input name="respuesta3" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta3" type="radio" aria-label="" value="C"> 3.- Lo paso por alto
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>4  Me gusta muchísimo tener invitados y hacer que lo pasen bien</h3></b>
	 <input type="hidden" name="pregunta4" value="pregunta4">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta4" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta4" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta4" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>5  Cuando tomo una decisión, siempre pienso cuidadosamente en lo que es correcto y justo</h3></b>
	 <input type="hidden" name="pregunta5" value="pregunta5">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta5" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta5" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta5" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>6  Me atrae más pasar una tarde ocupado en una tarea tranquila a la que tenga afición, que estar en una reunión animada</h3></b>
	 <input type="hidden" name="pregunta6"value="pregunta6">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta6" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta6" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta6" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>7 Admiro más a</h3></b>
	 <input type="hidden" name="pregunta7" value="pregunta7">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta7" type="radio" aria-label="" value="A" required> 1.- Una persona con capacidad de tipo medio, pero con  una moral estricta
			 </div>
			 <div class="form-check">
 			 <input name="respuesta7" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta7" type="radio" aria-label="" value="C"> 3.- Una persona con talento, aunque a veces no sea responsable
			 </div>
		</div>
</div><br>
<div>
	 <b><h3>8  Sería más interesante ser</h3></b>
	 <input type="hidden" name="pregunta8" value="pregunta8">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta8" type="radio" aria-label="" value="A" required> 1.- ingeniero de la construcción
			 </div>
			 <div class="form-check">
 			 <input name="respuesta8" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta8" type="radio" aria-label="" value="C"> 3.- Escritor  de teatro
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>9  Normalmente soy el que da el primer paso al hacer amigos</h3></b>
	 <input type="hidden" name="pregunta9" value="pregunta9">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta9" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta9" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta9" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>10  Me encantan las buenas novelas u obras de teatro/cine</h3></b>
	 <input type="hidden" name="pregunta10" value="pregunta10">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta10" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta10" type="radio" aria-label="" value="B"> 2.-  ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta10" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>11  Cuando la gente autoritaria trata de dominarme, hago justamente lo contrario de lo que quiere</h3></b>
	 <input type="hidden" name="pregunta11" value="pregunta11">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta11" type="radio" aria-label="" value="A" required> 1.- Si
			 </div>
			 <div class="form-check">
 			 <input name="respuesta11" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta11" type="radio" aria-label="" value="C"> 3.- No
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>12  Algunas veces no congenio muy bien con los demás porque mis ideas no son convencionales y corrientes</h3></b>
	 <input type="hidden" name="pregunta12" value="pregunta12">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta12" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta12" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta12" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>13  Muchas personas te "apuñalarían por la espalda" para salir ellas adelante</h3></b>
	 <input type="hidden" name="pregunta13" value="pregunta13">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta13" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta13" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta13" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div>
<div><br>
	<b><h3> 14  Me meto en problemas, porque a veces sigo adelante con mis ideas sin comentarlas con las personas que pueden estar implicadas</h3></b>
	<input type="hidden" name="pregunta14" value="pregunta14">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta14" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta14" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta14" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>15  Hablo de mis sentimientos</h3></b>
	 <input type="hidden" name="pregunta15" value="pregunta15">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta15" type="radio" aria-label="" value="A" required> 1.- Con facilidad, cuando las personas parecen estar interesadas
			 </div>
			 <div  class="form-check">
 			 <input name="respuesta15" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div  class="form-check">
 			 <input name="respuesta15" type="radio" aria-label="" value="C"> 3.- Sólo si no tengo más remedio
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>16  Me aprovecho de la gente</h3></b>
	 <input type="hidden" name="pregunta16" value="pregunta16">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta16" type="radio" aria-label="" value="A" required> 1.- Algunas veces
			 </div>
			 <div class="form-check">
 			 <input name="respuesta16" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta16" type="radio" aria-label="" value="C"> 3.- Nunca
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>17  Mis pensamientos son demasiado complicados y profundos como para ser  comprendidos por muchas personas</h3></b>
	 <input type="hidden" name="pregunta17" value="pregunta17">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta17" type="radio" aria-label="" value="A" required> 1.- Casi nunca
			 </div>
			 <div class="form-check">
 			 <input name="respuesta17" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta17" type="radio" aria-label="" value="C"> 3.- A menudo
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>18  Prefiero</h3>
	 </b><input type="hidden" name="pregunta18" value="pregunta18">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta18" type="radio" aria-label="" value="A" required> 1.- Comentar mis problemas con los amigos
			 </div>
			 <div class="form-check">
 			 <input name="respuesta18" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta18" type="radio" aria-label="" value="C"> 3.- Guardarlos para mis adentros
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>19  Pienso acerca de las cosas que debería haber dicho, pero que no las dije</h3></b>
	 <input type="hidden" name="pregunta19" value="pregunta19">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta19" type="radio" aria-label="" value="A" required> 1.- Casi nunca
			 </div>
			 <div class="form-check">
 			 <input name="respuesta19" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta19" type="radio" aria-label="" value="C"> 3.- A menudo
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>20 Siempre estoy alerta ante los intentos de propaganda en las cosas que leo</h3></b>
	 <input type="hidden" name="pregunta20" value="pregunta20">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta20" type="radio" aria-label="" value="A" required> 1.- Si
			 </div>
			 <div class="form-check">
 			 <input name="respuesta20" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta20" type="radio" aria-label="" value="C"> 3.- No
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>21  Si las personas actúan como si yo no les gustara</h3></b>
	 <input type="hidden" name="pregunta21" value="pregunta21">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta21" type="radio" aria-label="" value="A" required> 1.- No me perturba
			 </div>
			 <div class="form-check">
 			 <input name="respuesta21" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta21" type="radio" aria-label="" value="C"> 3.- Normalmente me hace daño
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>22  Cuando observo que difiero de alguien en puntos de vista sociales, prefiero</h3></b>
	 <input type="hidden" name="pregunta22" value="pregunta22">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta22" type="radio" aria-label="" value="A" required> 1.- Discutir el significado de nuestras diferencias básicas
			 </div>
			 <div class="form-check">
 			 <input name="respuesta22" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta22" type="radio" aria-label="" value="C"> 3.- Cambiar de tema
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>23  He dicho cosas que hirieron los sentimientos de otros</h3></b>
	 <input type="hidden" name="pregunta23" value="pregunta23">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta23" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta23" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta23" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>24  Si tuviera que cocinar o construir algo, seguiría las instrucciones exactamente</h3></b>
	 <input type="hidden" name="pregunta24" value="pregunta24">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta24" type="radio" aria-label="" value="A" required> 1.- V erdadero, para evitar sorpresas
			 </div>
			 <div class="form-check">
 			 <input name="respuesta24" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta24" type="radio" aria-label="" value="C"> 3.- Falso, porque podría hacer algo mas interesante
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>25  A la hora de construir o hacer algo, preferiría trabajar</h3></b>
	 <input type="hidden" name="pregunta25" value="pregunta25">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta25" type="radio" aria-label="" value="A" required> 1.- Con otros
			 </div>
			 <div class="form-check">
 			 <input name="respuesta25" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta25" type="radio" aria-label="" value="C"> 3.- Yo solo
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>26  Me gusta hacer planes con antelación para no perder tiempo entre las tareas</h3></b>
	 <input type="hidden" name="pregunta26" value="pregunta26">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta26" type="radio" aria-label="" value="A" required> 1.- Raras veces
			 </div>
			 <div class="form-check">
 			 <input name="respuesta26" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta26" type="radio" aria-label="" value="C"> 3.- A menudo
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>27  Normalmente me gusta hacer mis planes yo solo, sin interrupciones y sugerencias de otros</h3></b>
	 <input type="hidden" name="pregunta27" value="pregunta27">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta27" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta27" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta27" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>28  Cuando me siento tenso, incluso pequeñas cosas me sacan de quicio</h3></b>
	 <input type="hidden" name="pregunta28" value="pregunta28">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta28" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta28" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta28" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>29  Puedo encontrarme bastante a gusto en un ambiente desorganizado</h3></b>
	 <input type="hidden" name="pregunta29" value="pregunta29">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta29" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta29" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta29" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>30  Si mis planes, cuidadosamente elaborados, tuvieran que ser cambiados a causa de otras personas</h3></b>
	 <input type="hidden" name="pregunta30" value="pregunta30">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta30" type="radio" aria-label="" value="A" required> 1.- Eso me molestaría e irritaría
			 </div>
			 <div class="form-check">
 			 <input name="respuesta30" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta30" type="radio" aria-label="" value="C"> 3.- Me parecería bien y estaría   contento de cambiarlos
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>31  Preferiría</h3></b>
	 <input type="hidden" name="pregunta31" value="pregunta31">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta31" type="radio" aria-label="" value="A" required> 1.- Estar en una oficina organizando y atendiendo personas.
			 </div>
			 <div class="form-check">
 			 <input name="respuesta31" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta31" type="radio" aria-label="" value="C"> 3.- Ser arquitecto y dibujar planos en un despacho tranquilo.
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>32  Cuando las pequeñas cosas comienzan a marchar mal una detrás de otras</h3></b>
	 <input type="hidden" name="pregunta32" value="pregunta32">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta32" type="radio" aria-label="" value="A" required> 1.- Me siento como si no pudiera dominarlas
			 </div>
			 <div class="form-check">
 			 <input name="respuesta32" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta32" type="radio" aria-label="" value="C"> 3.- Continúo de un modo normal
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>33  Me satisface y entretiene  cuidarme de las necesidades de los demás</h3></b>
	 <input type="hidden" name="pregunta33" value="pregunta33">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta33" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta33" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta33" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>34  A veces hago observaciones tontas, a modo de broma, para sorprender a los demás</h3></b>
	 <input type="hidden" name="pregunta34" value="pregunta34">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta34" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta34" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta34" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>35  Cuando llega el momento de hacer algo que he planeado y esperado, a veces no me apetece ya continuarlo</h3></b>
	 <input type="hidden" name="pregunta35" value="pregunta35">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta35" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta35" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta35" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>36  En las situaciones que dependen de mí, me siento bien dando instrucciones a los demás</h3></b>
	 <input type="hidden" name="pregunta36" value="pregunta36">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta36" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta36" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta36" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>37  Preferiría emplear una tarde</h3></b>
	 <input type="hidden" name="pregunta37" value="pregunta37">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta37" type="radio" aria-label="" value="A" required> 1.- Haciendo con tranquilidad y sosiego algo por lo que tenga afición.
			 </div>
			 <div class="form-check">
 			 <input name="respuesta37" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta37" type="radio" aria-label="" value="C"> 3.- En una fiesta animada
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>38  Cuando yo sé muy bien lo que el grupo tiene que hacer, me gusta ser el único en dar las órdenes</h3></b>
	 <input type="hidden" name="pregunta38" value="pregunta38">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta38" type="radio" aria-label="" value="A" required> 1.- Si
			 </div>
			 <div class="form-check">
 			 <input name="respuesta38" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta38" type="radio" aria-label="" value="C"> 3.- No
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>39  Me divierte mucho el rápido y vivaz humor de algunas series de televisión</h3></b>
	 <input type="hidden" name="pregunta39" value="pregunta39">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta39" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta39" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta39" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>40  Le doy más valor y respeto a las normas y buenas maneras que a una vida fácil</h3></b>
	 <input type="hidden" name="pregunta40" value="pregunta40">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta40" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta40" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta40" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>41  Me encuentro tímido y retraído a la hora de hacer amigos entre personas desconocidas</h3></b>
	 <input type="hidden" name="pregunta41" value="pregunta41">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta41" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta41" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta41" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>42  Si pudiera, preferiría hacer ejercicios con</h3></b>
	 <input type="hidden" name="pregunta42" value="pregunta42">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta42" type="radio" aria-label="" value="A" required> 1.- La esgrima o la danza
			 </div>
			 <div class="form-check">
 			 <input name="respuesta42" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta42" type="radio" aria-label="" value="C"> 3.- El tenis o la lucha libre
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>43  Normalmente, hay una gran diferencia entre lo que la gente dice y lo que hace</h3></b>
	 <input type="hidden" name="pregunta43" value="pregunta43">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta43" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta43" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta43" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>44  Resultaría más interesante ser músico que mecánico</h3></b>
	 <input type="hidden" name="pregunta44" value="pregunta44">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta44" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta44" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta44" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>45  Las personas forman su opinión acerca de mí demasiado rápidamente</h3></b>
	 <input type="hidden" name="pregunta45" value="pregunta45">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta45" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta45" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta45" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>46  Soy de esas personas que</h3></b>
	 <input type="hidden" name="pregunta46" value="pregunta46">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta46" type="radio" aria-label="" value="A" required> 1.- Siempre están haciendo cosas prácticas que necesitan ser hechas
			 </div>
			 <div class="form-check">
 			 <input name="respuesta46" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta46" type="radio" aria-label="" value="C"> 3.- Imaginan o piensan acerca de cosas sobre sí mismas.
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>47  Algunas personas creen que es difícil intimar conmigo</h3></b>
	 <input type="hidden" name="pregunta47" value="pregunta47">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta47" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta47" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta47" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>48  Puedo engañar a las personas siendo amigable cuando en realidad me desagradan</h3></b>
	 <input type="hidden" name="pregunta48" value="pregunta48">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta48" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta48" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta48" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>49  Mis pensamientos tienden más a girar sobre cosas realistas y prácticas</h3></b>
	 <input type="hidden" name="pregunta49" value="pregunta49">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta49" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta49" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta49" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>50  Suelo ser reservado y guardar mis problemas para mis adentros</h3></b>
	 <input type="hidden" name="pregunta50" value="pregunta50">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta50" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta50" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta50" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>51  Después de tomar  una decisión sobre algo, sigo pensando si será acertada o errónea</h3></b>
	 <input type="hidden" name="pregunta51" value="pregunta51">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta51" type="radio" aria-label="" value="A" required> 1.- Normalmente verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta51" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta51" type="radio" aria-label="" value="C"> 3.- Normalmente falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>52  En el fondo no me gustan las personas que son diferentes u originales</h3></b>
	 <input type="hidden" name="pregunta52" value="pregunta52">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta52" type="radio" aria-label="" value="A" required> 1.- Verdadero, normalmente no me gustan
			 </div>
			 <div class="form-check">
 			 <input name="respuesta52" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta52" type="radio" aria-label="" value="C"> 3.- Falso, normalmente las encuentro interesantes.
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>53  Estoy más interesado en</h3></b>
	 <input type="hidden" name="pregunta53" value="pregunta53">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta53" type="radio" aria-label="" value="A" required> 1.- Buscar un significado personal a la vida.
			 </div>
			 <div class="form-check">
 			 <input name="respuesta53" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta53" type="radio" aria-label="" value="C"> 3.- Asegurarme un trabajo con un buen sueldo
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>54  Me perturbo más que otros, cuando las personas se enfadan entre ellas</h3></b>
	 <input type="hidden" name="pregunta54" value="pregunta54">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta54" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta54" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta54" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>55  Lo que este mundo necesita es</h3></b>
	 <input type="hidden" name="pregunta55" value="pregunta55">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta55" type="radio" aria-label="" value="A" required> 1.- Más ciudadanos íntegros y constantes.
			 </div>
			 <div class="form-check">
 			 <input name="respuesta55" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta55" type="radio" aria-label="" value="C"> 3.- Más reformadores con opiniones sobre como mejorar el mundo
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>56  Prefiero los juegos en los que</h3></b>
	 <input type="hidden" name="pregunta56" value="pregunta56">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta56" type="radio" aria-label="" value="A" required> 1.- Se forman equipos o se tiene un compañero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta56" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta56" type="radio" aria-label="" value="C"> 3.- Cada  uno hace su partida
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>57  Normalmente dejo algunas cosas a la buena suerte en vez de hacer planes complejos y con todo detalle</h3></b>
	 <input type="hidden" name="pregunta57" value="pregunta57">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta57" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta57" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta57" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>58  Frecuentemente tengo periodos de tiempo en que me es difícil abandonar el sentimiento de compadecerme a mí mismo</h3></b>
	 <input type="hidden" name="pregunta58" value="pregunta58">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta58" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta58" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta58" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>59  Mis mejores horas del día son aquellas en que estoy solo con mis pensamientos y proyectos</h3></b>
	 <input type="hidden" name="pregunta59" value="pregunta59">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta59" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta59" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta59" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>60  Si la gente me interrumpe cuando estoy intentando hacer algo, eso no me perturba</h3></b>
	 <input type="hidden" name="pregunta60" value="pregunta60">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta60" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta60" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta60" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>61  Siempre conservo mis pertenencias en perfectas condiciones</h3></b>
	 <input type="hidden" name="pregunta61" value="pregunta61">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta61" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta61" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta61" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>62  A veces me siento frustrado por las personas demasiado rápidamente</h3></b>
	 <input type="hidden" name="pregunta62" value="pregunta62">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta62" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta62" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta62" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>63  No me siento a gusto cuando hablo o muestro mis sentimientos de afecto o cariño</h3></b>
	 <input type="hidden" name="pregunta63" value="pregunta63">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta63" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta63" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta63" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>64  En mi vida personal, casi siempre alcanzo las metas que me pongo</h3></b>
	 <input type="hidden" name="pregunta64" value="pregunta64">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta64" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta64" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta64" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>65  Si mi sueldo fuera el mismo, preferiría ser un científico más que un directivo de ventas</h3></b>
	 <input type="hidden" name="pregunta65" value="pregunta65">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta65" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta65" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta65" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>66  Si la gente hace algo incorrecto, normalmente le digo lo que pienso</h3></b>
	 <input type="hidden" name="pregunta66" value="pregunta66">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta66" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta66" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta66" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>67  Pienso que mis necesidades emocionales</h3></b>
	 <input type="hidden" name="pregunta67" value="pregunta67">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta67" type="radio" aria-label="" value="A" required> 1.- No están demasiado satisfechas.
			 </div>
			 <div class="form-check">
 			 <input name="respuesta67" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta67" type="radio" aria-label="" value="C"> 3.- Están totalmente satisfechas
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>68  En las dificultades diarias por lo general no pierdo la esperanza</h3></b>
	 <input type="hidden" name="pregunta68" value="pregunta68">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta68" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta68" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta68" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>69  La gente debería insistir, más de lo que hace ahora, en que las normas morales sean seguidas estrictamente</h3></b>
	 <input type="hidden" name="pregunta69" value="pregunta69">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta69" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta69" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta69" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>70  Preferiría vestir</h3></b>
	 <input type="hidden" name="pregunta70" value="pregunta70">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta70" type="radio" aria-label="" value="A" required> 1.- De modo aseado y sencillo
			 </div>
			 <div class="form-check">
 			 <input name="respuesta70" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta70" type="radio" aria-label="" value="C"> 3.- A la moda y original
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>71  Me suelo sentir desconcertado si de pronto paso a ser el centro de la atención en un grupo social</h3></b>
	 <input type="hidden" name="pregunta71" value="pregunta71">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta71" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta71" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta71" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>72  Me pone irritado que la gente insista en que yo siga las mínimas reglas de seguridad</h3></b>
	 <input type="hidden" name="pregunta72" value="pregunta72">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta72" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta72" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta72" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>73  Comenzar a conversar con extraños</h3></b>
	 <input type="hidden" name="pregunta73" value="pregunta73">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta73" type="radio" aria-label="" value="A" required> 1.- Nunca me ha dado problemas
			 </div>
			 <div class="form-check">
 			 <input name="respuesta73" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta73" type="radio" aria-label="" value="C"> 3.- Me cuesta bastante
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>74  Si trabajara en un períodico, preferiría los temas de</h3></b>
	 <input type="hidden" name="pregunta74" value="pregunta74">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta74" type="radio" aria-label="" value="A" required> 1.- Literatura o cine
			 </div>
			 <div class="form-check">
 			 <input name="respuesta74" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta74" type="radio" aria-label="" value="C"> 3.- Deportes o política
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>75  Dejo que pequeñas cosas me perturban más de lo que debieran</h3></b>
	 <input type="hidden" name="pregunta75" value="pregunta75">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta75" type="radio" aria-label="" value="A" required> 1.- A veces
			 </div>
			 <div class="form-check">
 			 <input name="respuesta75" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta75" type="radio" aria-label="" value="C"> 3.- raras  veces
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>76  Es acertado estar en guardia con los que hablan de modo amable, porque se pueden aprovechar de uno</h3></b>
	 <input type="hidden" name="pregunta76" value="pregunta76">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta76" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta76" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta76" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>77  En la calle me detendría más a contemplar a un artista pintando que a ver la construcción de un edificio</h3></b>
	 <input type="hidden" name="pregunta77" value="pregunta77">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta77" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta77" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta77" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>78  Las personas se hacen perezosas en su trabajo cuando consiguen hacerlo con facilidad</h3></b>
	 <input type="hidden" name="pregunta78" value="pregunta78">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta78" type="radio" aria-label="" value="A" required> 1.- Casi Nunca
			 </div>
			 <div class="form-check">
 			 <input name="respuesta78" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta78" type="radio" aria-label="" value="C"> 3.- A menudo
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>79  Se me ocurren ideas nuevas sobre todo tipo de cosas, demasiadas para ponerlas en práctica</h3></b>
	 <input type="hidden" name="pregunta79" value="pregunta79">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta79" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta79" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta79" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>80  Cuando hablo con alguien que no conozco todavía, no doy más información que la necesaria</h3></b>
	 <input type="hidden" name="pregunta80" value="pregunta80">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta80" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta80" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta80" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>81  Pongo más atención en</h3></b>
	 <input type="hidden" name="pregunta81" value="pregunta81">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta81" type="radio" aria-label="" value="A" required> 1.- Las cosas prácticas que me rodean
			 </div>
			 <div class="form-check">
 			 <input name="respuesta81" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta81" type="radio" aria-label="" value="C"> 3.- Los pensamientos y la imaginación
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>82  Cuando la gente me critica delante de otros, me siento muy descorazonado y herido</h3></b>
	 <input type="hidden" name="pregunta82" value="pregunta82">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta82" type="radio" aria-label="" value="A" required> 1.- Casi nunca
			 </div>
			 <div class="form-check">
 			 <input name="respuesta82" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta82" type="radio" aria-label="" value="C"> 3.- A menudo
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>83  Encuentro más interesante a la gente si sus puntos de vista son diferentes de los de la mayoría</h3></b>
	 <input type="hidden" name="pregunta83" value="pregunta83">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta83" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta83" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta83" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>84  Al tratar con la gente, es mejor</h3></b>
	 <input type="hidden" name="pregunta84" value="pregunta84">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta84" type="radio" aria-label="" value="A" required> 1.- "Poner todas las cartas sobre la mesa"
			 </div>
			 <div class="form-check">
 			 <input name="respuesta84" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta84" type="radio" aria-label="" value="C"> 3.- "No descubrir tu propio juego"
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>85  A veces me gustaría más ponerme en mi sitio que perdonar y olvidar</h3></b>
	 <input type="hidden" name="pregunta85" value="pregunta85">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta85" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta85" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta85" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>86  Me gusta la gente que</h3></b>
	 <input type="hidden" name="pregunta86" value="pregunta86">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta86" type="radio" aria-label="" value="A" required> 1.- Es estable y tradicional en sus intereses
			 </div>
			 <div class="form-check">
 			 <input name="respuesta86" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta86" type="radio" aria-label="" value="C"> 3.- Reconsidera seriamente sus puntos de vista sobre la vida
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>87  A veces me siento demasiado responsable sobre las cosas que suceden a mi alrededor</h3></b>
	 <input type="hidden" name="pregunta87" value="pregunta87">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta87" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta87" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta87" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>88  El trabajo que me es familiar y habitual</h3></b>
	 <input type="hidden" name="pregunta88" value="pregunta88">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta88" type="radio" aria-label="" value="A" required> 1.- Me aburre y me da sueño
			 </div>
			 <div class="form-check">
 			 <input name="respuesta88" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta88" type="radio" aria-label="" value="C"> 3.- Me da seguridad y confianza
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>89  Logro terminar las cosas mejor cuando trabajo solo que cuando lo hago en equipo</h3></b>
	 <input type="hidden" name="pregunta89" value="pregunta89">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta89" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta89" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta89" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>90  Normalmente no me importa si mi habitación está desordenada</h3></b>
	 <input type="hidden" name="pregunta90" value="pregunta90">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta90" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta90" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta90" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>91  Me resulta fácil ser paciente, aún cuando alguien es lento para comprender lo que estoy explicándole</h3></b>
	 <input type="hidden" name="pregunta91" value="pregunta91">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta91" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta91" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta91" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>92  Me gusta unirme a otros que van a hacer algo juntos, como ir a un museo o de excursión</h3></b>
	 <input type="hidden" name="pregunta92" value="pregunta92">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta92" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta92" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta92" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>93  Soy algo perfeccionista y me gusta que las cosas se hagan bien</h3></b>
	 <input type="hidden" name="pregunta93" value="pregunta93">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta93" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta93" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta93" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>94  Cuando tengo que hacer una larga cola por algún motivo, no me pongo tan intranquilo y  nervioso como la mayoría</h3></b>
	 <input type="hidden" name="pregunta94" value="pregunta94">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta94" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta94" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta94" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>95  La gente me trata menos razonablemente de lo que merecen mis buenas intenciones</h3></b>
	 <input type="hidden" name="pregunta95" value="pregunta95">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta95" type="radio" aria-label="" value="A" required> 1.- A veces
			 </div>
			 <div class="form-check">
 			 <input name="respuesta95" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta95" type="radio" aria-label="" value="C"> 3.- Nunca
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>96  Me lo paso bien con gente que muestra abiertamente sus emociones</h3></b>
	 <input type="hidden" name="pregunta96" value="pregunta96">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta96" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta96" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta96" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>97  No dejo que me depriman pequeñas cosas</h3></b>
	 <input type="hidden" name="pregunta97" value="pregunta97">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta97" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta97" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta97" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>98  Si pudiera ayudar en el desarrollo de un invento útil, preferiría encargarme de</h3></b>
	 <input type="hidden" name="pregunta98" value="pregunta98">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta98" type="radio" aria-label="" value="A" required> 1.- Investigarlo en el laboratorio
			 </div>
			 <div class="form-check">
 			 <input name="respuesta98" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta98" type="radio" aria-label="" value="C"> 3.- Mostrar a las personas su utilización
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>99  Si ser cortés y amable no da resultado, puedo ser rudo y astuto cuando sea necesario</h3></b>
	 <input type="hidden" name="pregunta99" value="pregunta99">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta99" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta99" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta99" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>100  Me gusta ir a menudo a espectáculos y diversiones</h3></b>
	 <input type="hidden" name="pregunta100" value="pregunta100">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta100" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta100" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta100" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>101  Me siento insatisfecho conmigo mismo</h3></b>
	 <input type="hidden" name="pregunta101" value="pregunta101">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta101" type="radio" aria-label="" value="A" required> 1.- A veces
			 </div>
			 <div class="form-check">
 			 <input name="respuesta101" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta101" type="radio" aria-label="" value="C"> 3.- Raras  veces
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>102  Si nos perdiéramos en una ciudad y los amigos no estuvieran de acuerdo conmigo en el camino a seguir</h3></b>
	 <input type="hidden" name="pregunta102" value="pregunta102">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta102" type="radio" aria-label="" value="A" required> 1.- No protestaría y les seguiría
			 </div>
			 <div class="form-check">
 			 <input name="respuesta102" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta102" type="radio" aria-label="" value="C"> 3.- Les haría saber que yo creía que mi camino era mejor
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>103  La gente me considera una persona animada y sin preocupaciones</h3></b>
	 <input type="hidden" name="pregunta103" value="pregunta103">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta103" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta103" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta103" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>104  Si el banco se descuidara y no me cobrara algo que debiera, creo que</h3></b>
	 <input type="hidden" name="pregunta104" value="pregunta104">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta104" type="radio" aria-label="" value="A" required> 1.- Lo indicaría y lo pagaría
			 </div>
			 <div class="form-check">
 			 <input name="respuesta104" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta104" type="radio" aria-label="" value="C"> 3.- Yo no tengo por qué decírselo.
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>105  Siempre tengo que estar luchando contra mi timidez</h3></b>
	 <input type="hidden" name="pregunta105" value="pregunta105">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta105" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta105" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta105" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>106  Los profesores, sacerdotes y otras personas emplean mucho tiempo intentando impedir hacer lo que deseamos</h3></b>
	 <input type="hidden" name="pregunta106" value="pregunta106">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta106" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta106" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta106" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>107  Cuando estoy con un grupo, normalmente me siento , escucho y dejo que los demás lleven el peso de la conversación</h3></b>
	 <input type="hidden" name="pregunta107" value="pregunta107">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta107" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta107" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta107" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>108  Normalmente aprecio más la belleza de un poema que una excelente estrategia en un deporte</h3></b>
	 <input type="hidden" name="pregunta108" value="pregunta108">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta108" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta108" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta108" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>109  Si uno es franco y abierto, los demás intentan aprovecharse de él</h3></b>
	 <input type="hidden" name="pregunta109" value="pregunta109">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta109" type="radio" aria-label="" value="A" required> 1.- Casi Nunca
			 </div>
			 <div class="form-check">
 			 <input name="respuesta109" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta109" type="radio" aria-label="" value="C"> 3.- A menudo
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>110  Siempre me interesan las cosas mecánicas y soy bastante bueno para arreglarlas</h3></b>
	 <input type="hidden" name="pregunta110" value="pregunta110">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta110" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta110" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta110" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div>
<div><br>
	 111  A veces estoy tan enfrascado en mis pensamientos que, a no ser que salga de ellos, pierdo la noción del tiempo <b><h3>y desordeno o no  encuentro mis cosas</h3></b>
	 <input type="hidden" name="pregunta111" value="pregunta111">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta111" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta111" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta111" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>112  Parece como si no pudiera confiar en más de la mitad de la gente que voy conociendo</h3></b>
	 <input type="hidden" name="pregunta112" value="pregunta112">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta112" type="radio" aria-label="" value="A" required> 1.- Verdadero, no se puede confiar en ella
			 </div>
			 <div class="form-check">
 			 <input name="respuesta112" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta112" type="radio" aria-label="" value="C"> 3.- Falso, se puede confiar en ella
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>113  Normalmente descubro que conozco a los demás mejor que ellos me conocen a mí</h3></b>
	 <input type="hidden" name="pregunta113" value="pregunta113">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta113" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta113" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta113" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>114  A menudo, los demás dicen que mis ideas son realistas y prácticas</h3></b>
	 <input type="hidden" name="pregunta114" value="pregunta114">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta114" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta114" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta114" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>115  Si creo que lo merecen, hago agudas y sarcásticas observaciones a los demás</h3></b>
	 <input type="hidden" name="pregunta115" value="pregunta115">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta115" type="radio" aria-label="" value="A" required> 1.- A veces
			 </div>
			 <div class="form-check">
 			 <input name="respuesta115" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta115" type="radio" aria-label="" value="C"> 3.- Nunca
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>116  A veces me siento como si hubiera hecho algo malo, aunque realmente no lo haya hecho</h3></b>
	 <input type="hidden" name="pregunta116" value="pregunta116">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta116" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta116" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta116" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>117  Me resulta fácil hablar sobre mi vida, incluso sobre aspectos que otros considerarían muy personales</h3></b>
	 <input type="hidden" name="pregunta117" value="pregunta117">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta117" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta117" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta117" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>118  Me gusta diseñar modos por los que el mundo pudiera cambiar y mejorar</h3></b>
	 <input type="hidden" name="pregunta118" value="pregunta118">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta118" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta118" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta118" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>119  Tiendo a ser muy sensible y a preocuparme mucho acerca de algo que he hecho</h3></b>
	 <input type="hidden" name="pregunta119" value="pregunta119">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta119" type="radio" aria-label="" value="A" required> 1.- Casi nunca
			 </div>
			 <div class="form-check">
 			 <input name="respuesta119" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta119" type="radio" aria-label="" value="C"> 3.- A menudo
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>120  En el períodico que acostumbro a hojear, me intereso más por</h3></b>
	 <input type="hidden" name="pregunta120" value="pregunta120">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta120" type="radio" aria-label="" value="A" required> 1.- Los artículos sobre problemas sociales
			 </div>
			 <div class="form-check">
 			 <input name="respuesta120" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta120" type="radio" aria-label="" value="C"> 3.- Todas las noticias locales
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>121  Preferiría emplear una tarde libre en</h3></b>
	 <input type="hidden" name="pregunta121" value="pregunta121">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta121" type="radio" aria-label="" value="A" required> 1.- Leer o trabajar en solitario en un proyecto
			 </div>
			 <div class="form-check">
 			 <input name="respuesta121" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta121" type="radio" aria-label="" value="C"> 3.- Hacer alguna tarea con los amigos
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>122  Cuando hay algo molesto que hacerlo, prefiero</h3></b>
	 <input type="hidden" name="pregunta122" value="pregunta122">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta122" type="radio" aria-label="" value="A" required> 1.- Dejarlo a un lado hasta que no haya más remedio que hacerlo
			 </div>
			 <div class="form-check">
 			 <input name="respuesta122" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta122" type="radio" aria-label="" value="1"> 3.- Comenzar a hacerlo de inmediato
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>123  Prefiero tomar la comida de mediodía</h3></b>
	 <input type="hidden" name="pregunta123" value="pregunta123">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta123" type="radio" aria-label="" value="A" required> 1.- Con un grupo de gente
			 </div>
			 <div class="form-check">
 			 <input name="respuesta123" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta123" type="radio" aria-label="" value="C"> 3.- En solitario
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>124  Soy paciente con las personas, incluso cuando no son corteses y consideradas con mis sentimientos</h3></b>
	 <input type="hidden" name="pregunta124" value="pregunta124">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta124" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta124" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta124" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>125  Cuando hago algo, normalmente me tomo tiempo para pensar antes en todo lo que necesito para la tarea</h3></b>
	 <input type="hidden" name="pregunta125" value="pregunta125">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta125" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta125" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta125" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>126  Me siento molesto cuando la gente emplea mucho tiempo para explicar algo</h3></b>
	 <input type="hidden" name="pregunta126" value="pregunta126">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta126" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta126" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta126" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>127  Mis amigos probablemente me describen como una persona</h3></b>
	 <input type="hidden" name="pregunta127" value="pregunta127">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta127" type="radio" aria-label="" value="A" required> 1.- Cálida y amable
			 </div>
			 <div class="form-check">
 			 <input name="respuesta127" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta127" type="radio" aria-label="" value="C"> 3.- Formal y objetiva
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>128  Cuando algo me perturba, normalmente me olvido pronto de ello</h3></b>
	 <input type="hidden" name="pregunta128" value="pregunta128">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta128" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta128" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta128" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>129  Como afición agradable prefiero</h3></b>
	 <input type="hidden" name="pregunta129" value="pregunta129">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta129" type="radio" aria-label="" value="A" required> 1.- Hacer o reparar algo
			 </div>
			 <div class="form-check">
 			 <input name="respuesta129" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta129" type="radio" aria-label="" value="C"> 3.- Trabajar en grupo en una tarea comunitaria
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>130  Creo que debo reclamar si en el restaurante recibo mal servicio o alimentos deficientes</h3></b>
	 <input type="hidden" name="pregunta130" value="pregunta130">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta130" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta130" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta130" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>131  Tengo más cambios de humor que la mayoría de las personas que conozco</h3></b>
	 <input type="hidden" name="pregunta131" value="pregunta131">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta131" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta131" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta131" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>132  Cuando los demás no ven las cosas como las veo yo, normalmente logro convencerlos</h3></b>
	 <input type="hidden" name="pregunta132" value="pregunta132">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta132" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta132" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta132" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>133  Creo que ser libre para hacer lo que desee es más importante que tener buenos modales y respetar las normas</h3></b>
	 <input type="hidden" name="pregunta133" value="pregunta133">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta133" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta133" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta133" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>134  Me encanta hacer  reír a la gente con historias ingeniosas</h3></b>

	 <input type="hidden" name="pregunta134" value="pregunta134">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta134" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta134" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta134" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>135  Me considero una persona socialmente muy atrevida y comunicativa</h3></b>
	 <input type="hidden" name="pregunta135" value="pregunta135">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta135" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta135" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta135" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>136  Si una persona es lo suficientemente lista para eludir las normas sin que parezca que las incumple</h3></b>
	 <input type="hidden" name="pregunta136" value="pregunta136">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta136" type="radio" aria-label="" value="A" required> 1.- Podría incumplirlas si tiene razones especiales para ello
			 </div>
			 <div class="form-check">
 			 <input name="respuesta136" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta136" type="radio" aria-label="" value="C"> 3.- Debería seguirlas a pesar de todo
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>137  Cuando me uno a un nuevo grupo, normalmente encajo pronto</h3></b>
	 <input type="hidden" name="pregunta137" value="pregunta137">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta137" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta137" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta137" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>138  Prefiero leer historietas rudas o de ficción realista más que novelas sentimentales e imaginativas</h3></b>
	 <input type="hidden" name="pregunta138" value="pregunta138">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta138" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta138" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta138" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>139  Sospecho que la persona que se muestra abiertamente amigable conmigo puede ser desleal cuando ya no esté delante</h3></b>
	 <input type="hidden" name="pregunta139" value="pregunta139">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta139" type="radio" aria-label="" value="A" required> 1.- Casi nunca
			 </div>
			 <div class="form-check">
 			 <input name="respuesta139" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta139" type="radio" aria-label="" value="C"> 3.- A menudo
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>140  Cuando era niño, empleaba la mayor parte de mi tiempo en</h3></b>
	 <input type="hidden" name="pregunta140" value="pregunta140">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta140" type="radio" aria-label="" value="A" required> 1.- Hacer o construir algo
			 </div>
			 <div class="form-check">
 			 <input name="respuesta140" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta140" type="radio" aria-label="" value="C"> 3.- Leer o imaginar cosas ideales
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>141  Muchas personas son demasiado quisquillosas y sensibles, y por su propio bien deberían endurecerse</h3></b>
	 <input type="hidden" name="pregunta141" value="pregunta141">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta141" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta141" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta141" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>142  Me muestro tan interesado en pensar en las ideas que a veces paso por alto los detalles prácticos</h3></b>
	 <input type="hidden" name="pregunta142" value="pregunta142">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta142" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta142" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta142" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>143  Si alguien me hace una pregunta demasiado personal, intento cuidadosamente evitar contestarla</h3></b>
	 <input type="hidden" name="pregunta143" value="pregunta143">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta143" type="radio" aria-label="" value="A" required> 1.- Normalmente verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta143" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta143" type="radio" aria-label="" value="C"> 3.- Normalmente falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>144  Cuando me piden  hacer una tarea voluntaria digo que estoy demasiado ocupado</h3></b>
	 <input type="hidden" name="pregunta144" value="pregunta144">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta144" type="radio" aria-label="" value="A" required> 1.- A veces
			 </div>
			 <div class="form-check">
 			 <input name="respuesta144" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta144" type="radio" aria-label="" value="C"> 3.- Raras Veces
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>145  Mis amigos me consideran una persona algo abstraída y no siempre práctica</h3></b>
	 <input type="hidden" name="pregunta145" value="pregunta145">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta145" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta145" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta145" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>146  Me siento muy abatido cuando la gente me critica en un grupo</h3></b>
	 <input type="hidden" name="pregunta146" value="pregunta146">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta146" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta146" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta146" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>147  Les surgen más problemas a quienes</h3></b>
	 <input type="hidden" name="pregunta147" value="pregunta147">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta147" type="radio" aria-label="" value="A" required> 1.- Se cuestionan o cambian métodos que son ya satisfactorios
			 </div>
			 <div class="form-check">
 			 <input name="respuesta147" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta147" type="radio" aria-label="" value="C1"> 3.- Descartan enfoques nuevos o prometedores
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>148  Soy muy cuidadoso cuando se trata de elegir a alguien con quien abrirme francamente</h3></b>
	 <input type="hidden" name="pregunta148" value="pregunta148">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta148" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta148" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta148" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>149  Me gusta más intentar nuevos modos de hacer las cosas que seguir caminos ya conocidos</h3></b>
	 <input type="hidden" name="pregunta149" value="pregunta149">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta149" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta149" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta149" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>150  Los demás dicen que suelo ser demasiado crítico conmigo mismo</h3></b>
	 <input type="hidden" name="pregunta150" value="pregunta150">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta150" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta150" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta150" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div>
<div><br>
	<b><h3> 151  Generalmente me gusta más una comida si contiene alimentos familiares y cotidianos que si tiene alimentos poc
	o corrientes</h3></b>
	 <input type="hidden" name="pregunta151" value="pregunta151">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta151" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta151" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta151" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>152  Puedo pasar fácilmente un mañana entera sin tener necesidad de hablar con alguien</h3></b>
	 <input type="hidden" name="pregunta152" value="pregunta152">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta152" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta152" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta152" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>153  Deseo ayudar a las personas</h3></b>
	 <input type="hidden" name="pregunta153" value="pregunta153">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta153" type="radio" aria-label="" value="A" required> 1.- Siempre
			 </div>
			 <div class="form-check">
 			 <input name="respuesta153" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta153" type="radio" aria-label="" value="C"> 3.- A veces
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>154  Yo creo que</h3></b>
	 <input type="hidden" name="pregunta154" value="pregunta154">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta154" type="radio" aria-label="" value="A" required> 1.- Algunos trabajos no deberían ser hechos  tan cuidadosamente como otros
			 </div>
			 <div class="form-check">
 			 <input name="respuesta154" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta154" type="radio" aria-label="" value="C"> 3.- Cualquier trabajo habría que hacerlo bien si es que se ha a hacer
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>155  Me resulta difícil ser paciente cuando la gente me critica</h3></b>
	 <input type="hidden" name="pregunta155" value="pregunta155">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta155" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta155" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta155" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>156  Prefiero los momentos en que hay gente a mi alrededor</h3></b>
	 <input type="hidden" name="pregunta156" value="pregunta156">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta156" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta156" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta156" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div>
<div><br>
	<b><h3> 157  Cuando realizo una tarea, no me encuentro satisfecho a no ser que ponga especial atención incluso a los pequeños detalles</h3></b>
	 <input type="hidden" name="pregunta157" value="pregunta157">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta157" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta157" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta157" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>158  Algunas veces me sacan de quicio de un modo insoportable aquellas pequeñas cosas, aunque reconozca que son triviales</h3></b>
	 <input type="hidden" name="pregunta158" value="pregunta158">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta158" type="radio" aria-label="" value="A" required> 1.- Si
			 </div>
			 <div class="form-check">
 			 <input name="respuesta158" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta158" type="radio" aria-label="" value="C"> 3.- No
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>159  Me gusta más escuchar a la gente hablar de sus sentimientos personales  que de otros temas</h3></b>
	 <input type="hidden" name="pregunta159" value="pregunta159">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta159" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta159" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta159" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>160  Hay ocasiones en que no me siento de humor para ver a nadie</h3></b>
	 <input type="hidden" name="pregunta160" value="pregunta160">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta160" type="radio" aria-label="" value="A" required> 1.- Muy raras veces
			 </div>
			 <div class="form-check">
 			 <input name="respuesta160" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta160" type="radio" aria-label="" value="C"> 3.- Bastante a menudo
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>161  Me gustaría más ser consejero orientador que arquitecto</h3></b>
	 <input type="hidden" name="pregunta161" value="pregunta161">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta161" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta161" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta161" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>162  En mi vida cotidiana casi nunca me encuentro con problemas que no puedo afrontar</h3></b>
	 <input type="hidden" name="pregunta162" value="pregunta162">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta162" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta162" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta162" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>163  Cuando las personas  hacen algo que me molesta, normalmente</h3></b>
	 <input type="hidden" name="pregunta163" value="pregunta163">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta163" type="radio" aria-label="" value="A" required> 1.- No le doy importancia
			 </div>
			 <div class="form-check">
 			 <input name="respuesta163" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta163" type="radio" aria-label="" value="C"> 3.- Se lo digo
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>164  Yo creo más en</h3></b>
	 <input type="hidden" name="pregunta164" value="pregunta164">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta164" type="radio" aria-label="" value="A" required> 1.- Ser claramente serio en la vida cotidiana
			 </div>
			 <div class="form-check">
 			 <input name="respuesta164" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta164" type="radio" aria-label="" value="C"> 3.- Seguir casi siempre el dicho "Diviértete y sé feliz"
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>165  Me gusta que haya alguna competitividad en las cosas que hago</h3></b>
	 <input type="hidden" name="pregunta165" value="pregunta165">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta165" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta165" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta165" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>166  La mayoría de las normas se han hecho para no cumplirlas cuando haya buenas razones para ello</h3></b>
	 <input type="hidden" name="pregunta166" value="pregunta166">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta166" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta166" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta166" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>167  Me cuesta bastante hablar delante de un grupo numeroso de personas</h3></b>
	 <input type="hidden" name="pregunta167" value="pregunta167">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta167" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta167" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta167" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>168  Preferiría un hogar en el que</h3></b>
	 <input type="hidden" name="pregunta168" value="pregunta168">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta168" type="radio" aria-label="" value="A" required> 1.- Se sigan normas estrictas de conducta
			 </div>
			 <div class="form-check">
 			 <input name="respuesta168" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta168" type="radio" aria-label="" value="C"> 3.- No haya muchas normas
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>169  En las reuniones sociales suelo sentirme tímido e inseguro de mí mismo</h3></b>
	 <input type="hidden" name="pregunta169" value="pregunta169">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta169" type="radio" aria-label="" value="A" required> 1.- Verdadero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta169" type="radio" aria-label="" value="B"> 2.- ¿?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta169" type="radio" aria-label="" value="C"> 3.- Falso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>170  En la televisión prefiero</h3></b>
	 <input type="hidden" name="pregunta170" value="pregunta170">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta170" type="radio" aria-label="" value="A" required> 1.-  Un programa sobre nuevos inventos prácticos
			 </div>
			 <div class="form-check">
 			 <input name="respuesta170" type="radio" aria-label="" value="B"> 2.- ?
			 </div>
			 <div class="form-check">
 			 <input name="respuesta170" type="radio" aria-label="" value="C"> 3.- Un concierto de un artista famoso
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>171  Minuto es a hora, como segundo es a</h3></b>
	 <input type="hidden" name="pregunta171" value="pregunta171">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta171" type="radio" aria-label="" value="A" required> 1.- minuto
			 </div>
			 <div class="form-check">
 			 <input name="respuesta171" type="radio" aria-label="" value="B"> 2.- milisegundo
			 </div>
			 <div class="form-check">
 			 <input name="respuesta171" type="radio" aria-label="" value="C"> 3.- Hora
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>172  Renacuajo es a rana como larva es a</h3></b>
	 <input type="hidden" name="pregunta172" value="pregunta172">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta172" type="radio" aria-label="" value="A" required> 1.- Araña
			 </div>
			 <div class="form-check">
 			 <input name="respuesta172" type="radio" aria-label="" value="B"> 2.- Gusano
			 </div>
			 <div class="form-check">
 			 <input name="respuesta172" type="radio" aria-label="" value="C"> 3.- Insecto
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>173  Jamón es a cerdo como chuleta es a</h3></b>
	 <input type="hidden" name="pregunta173" value="pregunta173">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta173" type="radio" aria-label="" value="A" required> 1.- Cordero
			 </div>
			 <div class="form-check">
 			 <input name="respuesta173" type="radio" aria-label="" value="B"> 2.- Pollo
			 </div>
			 <div class="form-check">
 			 <input name="respuesta173" type="radio" aria-label="" value="C"> 3.- Merluza
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>174  Hielo es a agua como roca es a</h3></b>
	 <input type="hidden" name="pregunta174" value="pregunta174">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta174" type="radio" aria-label="" value="A" required> 1.- Larva
			 </div>
			 <div class="form-check">
 			 <input name="respuesta174" type="radio" aria-label="" value="B"> 2.- Arena
			 </div>
			 <div class="form-check">
 			 <input name="respuesta174" type="radio" aria-label="" value="C"> 3.- Petróleo
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>175  Mejor es a pésimo como peor es a</h3></b>
	 <input type="hidden" name="pregunta175" value="pregunta175">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta175" type="radio" aria-label="" value="A" required> 1.- Malo
			 </div>
			 <div class="form-check">
 			 <input name="respuesta175" type="radio" aria-label="" value="B"> 2.- Santo
			 </div>
			 <div class="form-check">
 			 <input name="respuesta175" type="radio" aria-label="" value="C"> 3.- Óptimo
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>176  ¿Cuál de las tres palabras indica algo diferente de las otras dos?</h3></b>
	 <input type="hidden" name="pregunta176" value="pregunta176">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta176" type="radio" aria-label="" value="A" required> 1.- Terminal
			 </div>
			 <div class="form-check">
 			 <input name="respuesta176" type="radio" aria-label="" value="B"> 2.- Estacional
			 </div>
			 <div class="form-check">
 			 <input name="respuesta176" type="radio" aria-label="" value="C"> 3.- Cíclico
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>177  ¿Cuál de las tres palabras indica algo diferente de las otras dos?</h3></b>
	 <input type="hidden" name="pregunta177" value="pregunta177">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta177" type="radio" aria-label="" value="A" required> 1.- Gato
			 </div>
			 <div class="form-check">
 			 <input name="respuesta177" type="radio" aria-label="" value="B"> 2.- Cerca
			 </div>
			 <div class="form-check">
 			 <input name="respuesta177" type="radio" aria-label="" value="C"> 3.- Planeta
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>178  Lo opuesto de correcto es lo opuesto de</h3></b>
	 <input type="hidden" name="pregunta178" value="pregunta178">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta178" type="radio" aria-label="" value="A" required> 1.- Bueno
			 </div>
			 <div class="form-check">
 			 <input name="respuesta178" type="radio" aria-label="" value="B"> 2.- Erróneo
			 </div>
			 <div class="form-check">
 			 <input name="respuesta178" type="radio" aria-label="" value="C"> 3.- Adecuado
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>179  ¿Cuál de las tres palabras indica algo diferente de las otras dos?</h3></b>
	 <input type="hidden" name="pregunta179" value="pregunta179">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta179" type="radio" aria-label="" value="A" required> 1.- Probable
			 </div>
			 <div class="form-check">
 			 <input name="respuesta179" type="radio" aria-label="" value="B"> 2.- Eventual
			 </div>
			 <div class="form-check">
 			 <input name="respuesta179" type="radio" aria-label="" value="C"> 3.- Inseguro
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>180  Lo opuesto de lo opuesto de inexacto es</h3></b>
	 <input type="hidden" name="pregunta180" value="pregunta180">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta180" type="radio" aria-label="" value="A" required> 1.- Casual
			 </div>
			 <div class="form-check">
 			 <input name="respuesta180" type="radio" aria-label="" value="B"> 2.- Puntual
			 </div>
			 <div class="form-check">
 			 <input name="respuesta180" type="radio" aria-label="" value="C"> 3.- Incorrecto
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>181  ¿Qué número debe seguir al final de éstos? 1 - 4 - 9 - 16</h3></b>
	 <input type="hidden" name="pregunta181" value="pregunta181">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta181" type="radio" aria-label="" value="A" required> 1.-     20
			 </div>
			 <div class="form-check">
 			 <input name="respuesta181" type="radio" aria-label="" value="B"> 2.-     25
			 </div>
			 <div class="form-check">
 			 <input name="respuesta181" type="radio" aria-label="" value="C"> 3.-		32
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>182  ¿Qué letra debe seguir al final de éstas? A - B - D - G - …</h3></b>
	 <input type="hidden" name="pregunta182" value="pregunta182">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta182" type="radio" aria-label="" value="A" required> 1.- H
			 </div>
			 <div class="form-check">
 			 <input name="respuesta182" type="radio" aria-label="" value="B"> 2.- K
			 </div>
			 <div class="form-check">
 			 <input name="respuesta182" type="radio" aria-label="" value="C"> 3.- L
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>183  ¿Qué letra debe seguir al final de éstas?  E  -  I  -  L  …</h3></b>
	 <input type="hidden" name="pregunta183" value="pregunta183">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta183" type="radio" aria-label="" value="A" required> 1.- M
			 </div>
			 <div class="form-check">
 			 <input name="respuesta183" type="radio" aria-label="" value="B"> 2.- N
			 </div>
			 <div class="form-check">
 			 <input name="respuesta183" type="radio" aria-label="" value="C"> 3.- O
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>184  ¿Qué número debe seguir al final de éstos? 1/12  -  1/6  -  1/3  -  2/3  …</h3></b>
	 <input type="hidden" name="pregunta184" value="pregunta184">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta184" type="radio" aria-label="" value="A" required> 1.- 3/4
			 </div>
			 <div class="form-check">
 			 <input name="respuesta184" type="radio" aria-label="" value="B"> 2.- 4/3
			 </div>
			 <div class="form-check">
 			 <input name="respuesta184" type="radio" aria-label="" value="C"> 3.- 3/2
			 </div>
		</div>
 </div><br>
<div>
	 <b><h3>185  ¿Qué número debe seguir al final de éstos? 1   2   0   3  -1  …</h3></b>
	 <input type="hidden" name="pregunta185" value="pregunta185">
		<div class="input-group">
			 <div class="form-check">
 			 <input name="respuesta185" type="radio" aria-label="" value="A" required> 1.-  5
			 </div>
			 <div class="form-check">
 			 <input name="respuesta185" type="radio" aria-label="" value="B"> 2.-  4
			 </div>
			 <div class="form-check">
 			 <input name="respuesta185" type="radio" aria-label="" value="C"> 3.-  3			 </div>
		</div>
 </div>

			</div>

				<button class="btn btn-success btn-block">Terminar</button>
			</div>
			</div></div></div></div>
		</div>
	</div>
	<div class="col-xs-6 col-sm-3">

</div>
</div>
</div>

    </div>
  </div>
</div>

<!-- Modal -->
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  	<div class="moda-header">

   	  	<div class="alert alert-primary" role="alert">
  			Instrucciones de Como contestar la Encuesta
  			 <span class="close">&times;</span>
	   	</div>
</div>
    <h3>
    <p>A continuación encontrará unas frases que permitirán conocer sus actitudes e intereses
	En general no existen respuestas "Buenas" ni "Malas"...</p>
	Conteste con sinceridad; de esta forma se podrá conocer mejor su forma de ser
	Cada frase contiene tres posibles respuestas (a, b, c); normalmente la alternativa " b " viene con una interrogante (?),
	para ser señalada cuando no es posible decidirse entre la a y la b.
	<p>Para responder emple la siguiente clave:
	Si su respuesta es a, seleccione 1 en el recuadro superior
	Si su respuesta es b, seleccione 2 en el recuadro del medio
	Si su respuesta es c, seleccione 3 en el recuadro inferior
	</p>
	 <p>
	NOTA: No medite su respuesta. Marque la primera que le venga a la mente.
	Si tiene dudas, pregunte al examinador : Gabriela Mejido
	El tiempo promedio de llenado es de 30 a 45 minutos, son un total de 185 preguntas , para obtener un perfil real es necesario contestar todas las preguntas de manera sincera. 	</p></h3>
  </div>

</div>

<script>
	// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
@endsection