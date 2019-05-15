@extends('layouts.catellay')
@section('content')
<div class="row">
	<div class="col-xs-6 col-sm-2">
	</div>
		<div class="col-xs-8 col-sm-8">
<div class="panel panel-primary">
	<div class="panel-heading">
		<center><h3>Cuestionario</h3></center>
		</div>
		<div class="panel-body">
			<p>Total de preguntas a contestar 185, el tiempo promedio de llenado es de 30 a 45 minutos, son un total de 185 preguntas , para obtener un perfil real es necesario contestar todas las preguntas de manera sincera. Nota en cada pregunta en la Opciòn 2 esta un signo de "?" , señale esa opciòn cuando ninguna de las respuestas le parezca congruente con lo que usted piensa. </p>
			<div>
			<div >
	<b> <h3>1 En un negocio sería  más interesante encargase de</h3></b>
		<div>
			<h4>
			 <div class="form-check">
 			 <input class="form-check-input" name="pregunta0" id="pregunta0" type="radio" value="1">
 			 <label class="form-check-label" for="pregunta0">
 			 	Las máquinas o llevar registros
 			 	</label>
			 </div>
			 <div class="form-check">
 			 <input class="form-check-input" name="pregunta0" type="radio" aria-label="" value="2">  ¿?
			 </div>
			 <div class="form-check">
 			 <input class="form-check-input" name="pregunta0" type="radio" aria-label="" value="">  Entrevistar y hablar con personas
			 </div>
			 </h4>
		</div>
 </div>
 <br>
<div>
	 2 Normalmente me voy a dormir sintiéndome satisfecho de cómo ha ido el día
		<div class="input-group">
			 <div>
 			 <input name="pregunta1" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta1" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta1" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 3 Si observo que la línea de razonamiento de otra persona es incorrecta, normalmente
		<div class="input-group">
			 <div>
 			 <input name="pregunta2" type="radio" aria-label="" value="1"> 1.- Se lo señalo
			 </div>
			 <div>
 			 <input name="pregunta2" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta2" type="radio" aria-label="" value="1"> 3.- Lo paso por alto
			 </div>
		</div>
 </div>
<div>
	 4  Me gusta muchísimo tener invitados y hacer que lo pasen bien
		<div class="input-group">
			 <div>
 			 <input name="pregunta3" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta3" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta3" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 5  Cuando tomo una decisión, siempre pienso cuidadosamente en lo que es correcto y justo
		<div class="input-group">
			 <div>
 			 <input name="pregunta4" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta4" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta4" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 6  Me atrae más pasar una tarde ocupado en una tarea tranquila a la que tenga afición, que estar en una reunión animada
		<div class="input-group">
			 <div>
 			 <input name="pregunta5" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta5" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta5" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 7  Admiro más a
		<div class="input-group">
			 <div>
 			 <input name="pregunta6" type="radio" aria-label="" value="1"> 1.- Una persona con capacidad de tipo medio, pero con  una moral estricta
			 </div>
			 <div>
 			 <input name="pregunta6" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta6" type="radio" aria-label="" value="1"> 3.- Una persona con talento, aunque a veces no sea responsable
			 </div>
		</div>
 </div>
<div>
	 8  Sería más interesante ser
		<div class="input-group">
			 <div>
 			 <input name="pregunta7" type="radio" aria-label="" value="1"> 1.- ingeniero de la construcción
			 </div>
			 <div>
 			 <input name="pregunta7" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta7" type="radio" aria-label="" value="1"> 3.- Escritor  de teatro
			 </div>
		</div>
 </div>
<div>
	 9  Normalmente soy el que da el primer paso al hacer amigos
		<div class="input-group">
			 <div>
 			 <input name="pregunta8" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta8" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta8" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 10  Me encantan las buenas novelas u obras de teatro/cine
		<div class="input-group">
			 <div>
 			 <input name="pregunta9" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta9" type="radio" aria-label="" value="1"> 2.-  ?
			 </div>
			 <div>
 			 <input name="pregunta9" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 11  Cuando la gente autoritaria trata de dominarme, hago justamente lo contrario de lo que quiere
		<div class="input-group">
			 <div>
 			 <input name="pregunta10" type="radio" aria-label="" value="1"> 1.- Si
			 </div>
			 <div>
 			 <input name="pregunta10" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta10" type="radio" aria-label="" value="1"> 3.- No
			 </div>
		</div>
 </div>
<div>
	 12  Algunas veces no congenio muy bien con los demás porque mis ideas no son convencionales y corrientes
		<div class="input-group">
			 <div>
 			 <input name="pregunta11" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta11" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta11" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 13  Muchas personas te "apuñalarían por la espalda" para salir ellas adelante
		<div class="input-group">
			 <div>
 			 <input name="pregunta12" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta12" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta12" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 14  Me meto en problemas, porque a veces sigo adelante con mis ideas sin comentarlas con las personas que pueden estar implicadas
		<div class="input-group">
			 <div>
 			 <input name="pregunta13" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta13" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta13" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 15  Hablo de mis sentimientos
		<div class="input-group">
			 <div>
 			 <input name="pregunta14" type="radio" aria-label="" value="1"> 1.- Con facilidad, cuando las personas parecen estar interesadas
			 </div>
			 <div>
 			 <input name="pregunta14" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta14" type="radio" aria-label="" value="1"> 3.- Sólo si no tengo más remedio
			 </div>
		</div>
 </div>
<div>
	 16  Me aprovecho de la gente
		<div class="input-group">
			 <div>
 			 <input name="pregunta15" type="radio" aria-label="" value="1"> 1.- Algunas veces
			 </div>
			 <div>
 			 <input name="pregunta15" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta15" type="radio" aria-label="" value="1"> 3.- Nunca
			 </div>
		</div>
 </div>
<div>
	 17  Mis pensamientos son demasiado complicados y profundos como para ser  comprendidos por muchas personas
		<div class="input-group">
			 <div>
 			 <input name="pregunta16" type="radio" aria-label="" value="1"> 1.- Casi nunca
			 </div>
			 <div>
 			 <input name="pregunta16" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta16" type="radio" aria-label="" value="1"> 3.- A menudo
			 </div>
		</div>
 </div>
<div>
	 18  Prefiero
		<div class="input-group">
			 <div>
 			 <input name="pregunta17" type="radio" aria-label="" value="1"> 1.- Comentar mis problemas con los amigos
			 </div>
			 <div>
 			 <input name="pregunta17" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta17" type="radio" aria-label="" value="1"> 3.- Guardarlos para mis adentros
			 </div>
		</div>
 </div>
<div>
	 19  Pienso acerca de las cosas que debería haber dicho, pero que no las dije
		<div class="input-group">
			 <div>
 			 <input name="pregunta18" type="radio" aria-label="" value="1"> 1.- Casi nunca
			 </div>
			 <div>
 			 <input name="pregunta18" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta18" type="radio" aria-label="" value="1"> 3.- A menudo
			 </div>
		</div>
 </div>
<div>
	 20 Siempre estoy alerta ante los intentos de propaganda en las cosas que leo
		<div class="input-group">
			 <div>
 			 <input name="pregunta19" type="radio" aria-label="" value="1"> 1.- Si
			 </div>
			 <div>
 			 <input name="pregunta19" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta19" type="radio" aria-label="" value="1"> 3.- No
			 </div>
		</div>
 </div>
<div>
	 21  Si las personas actúan como si yo no les gustara
		<div class="input-group">
			 <div>
 			 <input name="pregunta20" type="radio" aria-label="" value="1"> 1.- No me perturba
			 </div>
			 <div>
 			 <input name="pregunta20" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta20" type="radio" aria-label="" value="1"> 3.- Normalmente me hace daño
			 </div>
		</div>
 </div>
<div>
	 22  Cuando observo que difiero de alguien en puntos de vista sociales, prefiero
		<div class="input-group">
			 <div>
 			 <input name="pregunta21" type="radio" aria-label="" value="1"> 1.- Discutir el significado de nuestras diferencias básicas
			 </div>
			 <div>
 			 <input name="pregunta21" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta21" type="radio" aria-label="" value="1"> 3.- Cambiar de tema
			 </div>
		</div>
 </div>
<div>
	 23  He dicho cosas que hirieron los sentimientos de otros
		<div class="input-group">
			 <div>
 			 <input name="pregunta22" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta22" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta22" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 24  Si tuviera que cocinar o construir algo, seguiría las instrucciones exactamente
		<div class="input-group">
			 <div>
 			 <input name="pregunta23" type="radio" aria-label="" value="1"> 1.- V erdadero, para evitar sorpresas
			 </div>
			 <div>
 			 <input name="pregunta23" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta23" type="radio" aria-label="" value="1"> 3.- Falso, porque podría hacer algo mas interesante
			 </div>
		</div>
 </div>
<div>
	 25  A la hora de construir o hacer algo, preferiría trabajar
		<div class="input-group">
			 <div>
 			 <input name="pregunta24" type="radio" aria-label="" value="1"> 1.- Con otros
			 </div>
			 <div>
 			 <input name="pregunta24" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta24" type="radio" aria-label="" value="1"> 3.- Yo solo
			 </div>
		</div>
 </div>
<div>
	 26  Me gusta hacer planes con antelación para no perder tiempo entre las tareas
		<div class="input-group">
			 <div>
 			 <input name="pregunta25" type="radio" aria-label="" value="1"> 1.- Raras veces
			 </div>
			 <div>
 			 <input name="pregunta25" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta25" type="radio" aria-label="" value="1"> 3.- A menudo
			 </div>
		</div>
 </div>
<div>
	 27  Normalmente me gusta hacer mis planes yo solo, sin interrupciones y sugerencias de otros
		<div class="input-group">
			 <div>
 			 <input name="pregunta26" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta26" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta26" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 28  Cuando me siento tenso, incluso pequeñas cosas me sacan de quicio
		<div class="input-group">
			 <div>
 			 <input name="pregunta27" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta27" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta27" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 29  Puedo encontrarme bastante a gusto en un ambiente desorganizado
		<div class="input-group">
			 <div>
 			 <input name="pregunta28" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta28" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta28" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 30  Si mis planes, cuidadosamente elaborados, tuvieran que ser cambiados a causa de otras personas
		<div class="input-group">
			 <div>
 			 <input name="pregunta29" type="radio" aria-label="" value="1"> 1.- Eso me molestaría e irritaría
			 </div>
			 <div>
 			 <input name="pregunta29" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta29" type="radio" aria-label="" value="1"> 3.- Me parecería bien y estaría   contento de cambiarlos
			 </div>
		</div>
 </div>
<div>
	 31  Preferiría
		<div class="input-group">
			 <div>
 			 <input name="pregunta30" type="radio" aria-label="" value="1"> 1.- Estar en una oficina organizando y atendiendo personas.
			 </div>
			 <div>
 			 <input name="pregunta30" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta30" type="radio" aria-label="" value="1"> 3.- Ser arquitecto y dibujar planos en un despacho tranquilo.
			 </div>
		</div>
 </div>
<div>
	 32  Cuando las pequeñas cosas comienzan a marchar mal una detrás de otras
		<div class="input-group">
			 <div>
 			 <input name="pregunta31" type="radio" aria-label="" value="1"> 1.- Me siento como si no pudiera dominarlas
			 </div>
			 <div>
 			 <input name="pregunta31" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta31" type="radio" aria-label="" value="1"> 3.- Continúo de un modo normal
			 </div>
		</div>
 </div>
<div>
	 33  Me satisface y entretiene  cuidarme de las necesidades de los demás
		<div class="input-group">
			 <div>
 			 <input name="pregunta32" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta32" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta32" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 34  A veces hago observaciones tontas, a modo de broma, para sorprender a los demás
		<div class="input-group">
			 <div>
 			 <input name="pregunta33" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta33" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta33" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 35  Cuando llega el momento de hacer algo que he planeado y esperado, a veces no me apetece ya continuarlo
		<div class="input-group">
			 <div>
 			 <input name="pregunta34" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta34" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta34" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 36  En las situaciones que dependen de mí, me siento bien dando instrucciones a los demás
		<div class="input-group">
			 <div>
 			 <input name="pregunta35" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta35" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta35" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 37  Preferiría emplear una tarde
		<div class="input-group">
			 <div>
 			 <input name="pregunta36" type="radio" aria-label="" value="1"> 1.- Haciendo con tranquilidad y sosiego algo por lo que tenga afición.
			 </div>
			 <div>
 			 <input name="pregunta36" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta36" type="radio" aria-label="" value="1"> 3.- En una fiesta animada
			 </div>
		</div>
 </div>
<div>
	 38  Cuando yo sé muy bien lo que el grupo tiene que hacer, me gusta ser el único en dar las órdenes
		<div class="input-group">
			 <div>
 			 <input name="pregunta37" type="radio" aria-label="" value="1"> 1.- Si
			 </div>
			 <div>
 			 <input name="pregunta37" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta37" type="radio" aria-label="" value="1"> 3.- No
			 </div>
		</div>
 </div>
<div>
	 39  Me divierte mucho el rápido y vivaz humor de algunas series de televisión
		<div class="input-group">
			 <div>
 			 <input name="pregunta38" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta38" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta38" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 40  Le doy más valor y respeto a las normas y buenas maneras que a una vida fácil
		<div class="input-group">
			 <div>
 			 <input name="pregunta39" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta39" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta39" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 41  Me encuentro tímido y retraído a la hora de hacer amigos entre personas desconocidas
		<div class="input-group">
			 <div>
 			 <input name="pregunta40" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta40" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta40" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 42  Si pudiera, preferiría hacer ejercicios con
		<div class="input-group">
			 <div>
 			 <input name="pregunta41" type="radio" aria-label="" value="1"> 1.- La esgrima o la danza
			 </div>
			 <div>
 			 <input name="pregunta41" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta41" type="radio" aria-label="" value="1"> 3.- El tenis o la lucha libre
			 </div>
		</div>
 </div>
<div>
	 43  Normalmente, hay una gran diferencia entre lo que la gente dice y lo que hace
		<div class="input-group">
			 <div>
 			 <input name="pregunta42" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta42" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta42" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 44  Resultaría más interesante ser músico que mecánico
		<div class="input-group">
			 <div>
 			 <input name="pregunta43" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta43" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta43" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 45  Las personas forman su opinión acerca de mí demasiado rápidamente
		<div class="input-group">
			 <div>
 			 <input name="pregunta44" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta44" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta44" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 46  Soy de esas personas que
		<div class="input-group">
			 <div>
 			 <input name="pregunta45" type="radio" aria-label="" value="1"> 1.- Siempre están haciendo cosas prácticas que necesitan ser hechas
			 </div>
			 <div>
 			 <input name="pregunta45" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta45" type="radio" aria-label="" value="1"> 3.- Imaginan o piensan acerca de cosas sobre sí mismas.
			 </div>
		</div>
 </div>
<div>
	 47  Algunas personas creen que es difícil intimar conmigo
		<div class="input-group">
			 <div>
 			 <input name="pregunta46" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta46" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta46" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 48  Puedo engañar a las personas siendo amigable cuando en realidad me desagradan
		<div class="input-group">
			 <div>
 			 <input name="pregunta47" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta47" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta47" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 49  Mis pensamientos tienden más a girar sobre cosas realistas y prácticas
		<div class="input-group">
			 <div>
 			 <input name="pregunta48" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta48" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta48" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 50  Suelo ser reservado y guardar mis problemas para mis adentros
		<div class="input-group">
			 <div>
 			 <input name="pregunta49" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta49" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta49" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 51  Después de tomar  una decisión sobre algo, sigo pensando si será acertada o errónea
		<div class="input-group">
			 <div>
 			 <input name="pregunta50" type="radio" aria-label="" value="1"> 1.- Normalmente verdadero
			 </div>
			 <div>
 			 <input name="pregunta50" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta50" type="radio" aria-label="" value="1"> 3.- Normalmente falso
			 </div>
		</div>
 </div>
<div>
	 52  En el fondo no me gustan las personas que son diferentes u originales
		<div class="input-group">
			 <div>
 			 <input name="pregunta51" type="radio" aria-label="" value="1"> 1.- Verdadero, normalmente no me gustan
			 </div>
			 <div>
 			 <input name="pregunta51" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta51" type="radio" aria-label="" value="1"> 3.- Falso, normalmente las encuentro interesantes.
			 </div>
		</div>
 </div>
<div>
	 53  Estoy más interesado en
		<div class="input-group">
			 <div>
 			 <input name="pregunta52" type="radio" aria-label="" value="1"> 1.- Buscar un significado personal a la vida.
			 </div>
			 <div>
 			 <input name="pregunta52" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta52" type="radio" aria-label="" value="1"> 3.- Asegurarme un trabajo con un buen sueldo
			 </div>
		</div>
 </div>
<div>
	 54  Me perturbo más que otros, cuando las personas se enfadan entre ellas
		<div class="input-group">
			 <div>
 			 <input name="pregunta53" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta53" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta53" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 55  Lo que este mundo necesita es
		<div class="input-group">
			 <div>
 			 <input name="pregunta54" type="radio" aria-label="" value="1"> 1.- Más ciudadanos íntegros y constantes.
			 </div>
			 <div>
 			 <input name="pregunta54" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta54" type="radio" aria-label="" value="1"> 3.- Más reformadores con opiniones sobre como mejorar el mundo
			 </div>
		</div>
 </div>
<div>
	 56  Prefiero los juegos en los que
		<div class="input-group">
			 <div>
 			 <input name="pregunta55" type="radio" aria-label="" value="1"> 1.- Se forman equipos o se tiene un compañero
			 </div>
			 <div>
 			 <input name="pregunta55" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta55" type="radio" aria-label="" value="1"> 3.- Cada  uno hace su partida
			 </div>
		</div>
 </div>
<div>
	 57  Normalmente dejo algunas cosas a la buena suerte en vez de hacer planes complejos y con todo detalle
		<div class="input-group">
			 <div>
 			 <input name="pregunta56" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta56" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta56" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 58  Frecuentemente tengo periodos de tiempo en que me es difícil abandonar el sentimiento de compadecerme a mí mismo
		<div class="input-group">
			 <div>
 			 <input name="pregunta57" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta57" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta57" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 59  Mis mejores horas del día son aquellas en que estoy solo con mis pensamientos y proyectos
		<div class="input-group">
			 <div>
 			 <input name="pregunta58" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta58" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta58" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 60  Si la gente me interrumpe cuando estoy intentando hacer algo, eso no me perturba
		<div class="input-group">
			 <div>
 			 <input name="pregunta59" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta59" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta59" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 61  Siempre conservo mis pertenencias en perfectas condiciones
		<div class="input-group">
			 <div>
 			 <input name="pregunta60" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta60" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta60" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 62  A veces me siento frustrado por las personas demasiado rápidamente
		<div class="input-group">
			 <div>
 			 <input name="pregunta61" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta61" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta61" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 63  No me siento a gusto cuando hablo o muestro mis sentimientos de afecto o cariño
		<div class="input-group">
			 <div>
 			 <input name="pregunta62" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta62" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta62" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 64  En mi vida personal, casi siempre alcanzo las metas que me pongo
		<div class="input-group">
			 <div>
 			 <input name="pregunta63" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta63" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta63" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 65  Si mi sueldo fuera el mismo, preferiría ser un científico más que un directivo de ventas
		<div class="input-group">
			 <div>
 			 <input name="pregunta64" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta64" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta64" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 66  Si la gente hace algo incorrecto, normalmente le digo lo que pienso
		<div class="input-group">
			 <div>
 			 <input name="pregunta65" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta65" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta65" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 67  Pienso que mis necesidades emocionales
		<div class="input-group">
			 <div>
 			 <input name="pregunta66" type="radio" aria-label="" value="1"> 1.- No están demasiado satisfechas.
			 </div>
			 <div>
 			 <input name="pregunta66" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta66" type="radio" aria-label="" value="1"> 3.- Están totalmente satisfechas
			 </div>
		</div>
 </div>
<div>
	 68  En las dificultades diarias por lo general no pierdo la esperanza
		<div class="input-group">
			 <div>
 			 <input name="pregunta67" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta67" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta67" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 69  La gente debería insistir, más de lo que hace ahora, en que las normas morales sean seguidas estrictamente
		<div class="input-group">
			 <div>
 			 <input name="pregunta68" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta68" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta68" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 70  Preferiría vestir
		<div class="input-group">
			 <div>
 			 <input name="pregunta69" type="radio" aria-label="" value="1"> 1.- De modo aseado y sencillo
			 </div>
			 <div>
 			 <input name="pregunta69" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta69" type="radio" aria-label="" value="1"> 3.- A la moda y original
			 </div>
		</div>
 </div>
<div>
	 71  Me suelo sentir desconcertado si de pronto paso a ser el centro de la atención en un grupo social
		<div class="input-group">
			 <div>
 			 <input name="pregunta70" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta70" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta70" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 72  Me pone irritado que la gente insista en que yo siga las mínimas reglas de seguridad
		<div class="input-group">
			 <div>
 			 <input name="pregunta71" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta71" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta71" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 73  Comenzar a conversar con extraños
		<div class="input-group">
			 <div>
 			 <input name="pregunta72" type="radio" aria-label="" value="1"> 1.- Nunca me ha dado problemas
			 </div>
			 <div>
 			 <input name="pregunta72" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta72" type="radio" aria-label="" value="1"> 3.- Me cuesta bastante
			 </div>
		</div>
 </div>
<div>
	 74  Si trabajara en un períodico, preferiría los temas de
		<div class="input-group">
			 <div>
 			 <input name="pregunta73" type="radio" aria-label="" value="1"> 1.- Literatura o cine
			 </div>
			 <div>
 			 <input name="pregunta73" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta73" type="radio" aria-label="" value="1"> 3.- Deportes o política
			 </div>
		</div>
 </div>
<div>
	 75  Dejo que pequeñas cosas me perturban más de lo que debieran
		<div class="input-group">
			 <div>
 			 <input name="pregunta74" type="radio" aria-label="" value="1"> 1.- A veces
			 </div>
			 <div>
 			 <input name="pregunta74" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta74" type="radio" aria-label="" value="1"> 3.- raras  veces
			 </div>
		</div>
 </div>
<div>
	 76  Es acertado estar en guardia con los que hablan de modo amable, porque se pueden aprovechar de uno
		<div class="input-group">
			 <div>
 			 <input name="pregunta75" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta75" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta75" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 77  En la calle me detendría más a contemplar a un artista pintando que a ver la construcción de un edificio
		<div class="input-group">
			 <div>
 			 <input name="pregunta76" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta76" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta76" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 78  Las personas se hacen perezosas en su trabajo cuando consiguen hacerlo con facilidad
		<div class="input-group">
			 <div>
 			 <input name="pregunta77" type="radio" aria-label="" value="1"> 1.- Casi Nunca
			 </div>
			 <div>
 			 <input name="pregunta77" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta77" type="radio" aria-label="" value="1"> 3.- A menudo
			 </div>
		</div>
 </div>
<div>
	 79  Se me ocurren ideas nuevas sobre todo tipo de cosas, demasiadas para ponerlas en práctica
		<div class="input-group">
			 <div>
 			 <input name="pregunta78" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta78" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta78" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 80  Cuando hablo con alguien que no conozco todavía, no doy más información que la necesaria
		<div class="input-group">
			 <div>
 			 <input name="pregunta79" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta79" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta79" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 81  Pongo más atención en
		<div class="input-group">
			 <div>
 			 <input name="pregunta80" type="radio" aria-label="" value="1"> 1.- Las cosas prácticas que me rodean
			 </div>
			 <div>
 			 <input name="pregunta80" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta80" type="radio" aria-label="" value="1"> 3.- Los pensamientos y la imaginación
			 </div>
		</div>
 </div>
<div>
	 82  Cuando la gente me critica delante de otros, me siento muy descorazonado y herido
		<div class="input-group">
			 <div>
 			 <input name="pregunta81" type="radio" aria-label="" value="1"> 1.- Casi nunca
			 </div>
			 <div>
 			 <input name="pregunta81" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta81" type="radio" aria-label="" value="1"> 3.- A menudo
			 </div>
		</div>
 </div>
<div>
	 83  Encuentro más interesante a la gente si sus puntos de vista son diferentes de los de la mayoría
		<div class="input-group">
			 <div>
 			 <input name="pregunta82" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta82" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta82" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 84  Al tratar con la gente, es mejor
		<div class="input-group">
			 <div>
 			 <input name="pregunta83" type="radio" aria-label="" value="1"> 1.- "Poner todas las cartas sobre la mesa"
			 </div>
			 <div>
 			 <input name="pregunta83" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta83" type="radio" aria-label="" value="1"> 3.- "No descubrir tu propio juego"
			 </div>
		</div>
 </div>
<div>
	 85  A veces me gustaría más ponerme en mi sitio que perdonar y olvidar
		<div class="input-group">
			 <div>
 			 <input name="pregunta84" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta84" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta84" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 86  Me gusta la gente que
		<div class="input-group">
			 <div>
 			 <input name="pregunta85" type="radio" aria-label="" value="1"> 1.- Es estable y tradicional en sus intereses
			 </div>
			 <div>
 			 <input name="pregunta85" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta85" type="radio" aria-label="" value="1"> 3.- Reconsidera seriamente sus puntos de vista sobre la vida
			 </div>
		</div>
 </div>
<div>
	 87  A veces me siento demasiado responsable sobre las cosas que suceden a mi alrededor
		<div class="input-group">
			 <div>
 			 <input name="pregunta86" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta86" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta86" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 88  El trabajo que me es familiar y habitual
		<div class="input-group">
			 <div>
 			 <input name="pregunta87" type="radio" aria-label="" value="1"> 1.- Me aburre y me da sueño
			 </div>
			 <div>
 			 <input name="pregunta87" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta87" type="radio" aria-label="" value="1"> 3.- Me da seguridad y confianza
			 </div>
		</div>
 </div>
<div>
	 89  Logro terminar las cosas mejor cuando trabajo solo que cuando lo hago en equipo
		<div class="input-group">
			 <div>
 			 <input name="pregunta88" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta88" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta88" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 90  Normalmente no me importa si mi habitación está desordenada
		<div class="input-group">
			 <div>
 			 <input name="pregunta89" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta89" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta89" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 91  Me resulta fácil ser paciente, aún cuando alguien es lento para comprender lo que estoy explicándole
		<div class="input-group">
			 <div>
 			 <input name="pregunta90" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta90" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta90" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 92  Me gusta unirme a otros que van a hacer algo juntos, como ir a un museo o de excursión
		<div class="input-group">
			 <div>
 			 <input name="pregunta91" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta91" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta91" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 93  Soy algo perfeccionista y me gusta que las cosas se hagan bien
		<div class="input-group">
			 <div>
 			 <input name="pregunta92" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta92" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta92" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 94  Cuando tengo que hacer una larga cola por algún motivo, no me pongo tan intranquilo y  nervioso como la mayoría
		<div class="input-group">
			 <div>
 			 <input name="pregunta93" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta93" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta93" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 95  La gente me trata menos razonablemente de lo que merecen mis buenas intenciones
		<div class="input-group">
			 <div>
 			 <input name="pregunta94" type="radio" aria-label="" value="1"> 1.- A veces
			 </div>
			 <div>
 			 <input name="pregunta94" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta94" type="radio" aria-label="" value="1"> 3.- Nunca
			 </div>
		</div>
 </div>
<div>
	 96  Me lo paso bien con gente que muestra abiertamente sus emociones
		<div class="input-group">
			 <div>
 			 <input name="pregunta95" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta95" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta95" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 97  No dejo que me depriman pequeñas cosas
		<div class="input-group">
			 <div>
 			 <input name="pregunta96" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta96" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta96" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 98  Si pudiera ayudar en el desarrollo de un invento útil, preferiría encargarme de
		<div class="input-group">
			 <div>
 			 <input name="pregunta97" type="radio" aria-label="" value="1"> 1.- Investigarlo en el laboratorio
			 </div>
			 <div>
 			 <input name="pregunta97" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta97" type="radio" aria-label="" value="1"> 3.- Mostrar a las personas su utilización
			 </div>
		</div>
 </div>
<div>
	 99  Si ser cortés y amable no da resultado, puedo ser rudo y astuto cuando sea necesario
		<div class="input-group">
			 <div>
 			 <input name="pregunta98" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta98" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta98" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 100  Me gusta ir a menudo a espectáculos y diversiones
		<div class="input-group">
			 <div>
 			 <input name="pregunta99" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta99" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta99" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 101  Me siento insatisfecho conmigo mismo
		<div class="input-group">
			 <div>
 			 <input name="pregunta100" type="radio" aria-label="" value="1"> 1.- A veces
			 </div>
			 <div>
 			 <input name="pregunta100" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta100" type="radio" aria-label="" value="1"> 3.- Raras  veces
			 </div>
		</div>
 </div>
<div>
	 102  Si nos perdiéramos en una ciudad y los amigos no estuvieran de acuerdo conmigo en el camino a seguir
		<div class="input-group">
			 <div>
 			 <input name="pregunta101" type="radio" aria-label="" value="1"> 1.- No protestaría y les seguiría
			 </div>
			 <div>
 			 <input name="pregunta101" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta101" type="radio" aria-label="" value="1"> 3.- Les haría saber que yo creía que mi camino era mejor
			 </div>
		</div>
 </div>
<div>
	 103  La gente me considera una persona animada y sin preocupaciones
		<div class="input-group">
			 <div>
 			 <input name="pregunta102" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta102" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta102" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 104  Si el banco se descuidara y no me cobrara algo que debiera, creo que
		<div class="input-group">
			 <div>
 			 <input name="pregunta103" type="radio" aria-label="" value="1"> 1.- Lo indicaría y lo pagaría
			 </div>
			 <div>
 			 <input name="pregunta103" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta103" type="radio" aria-label="" value="1"> 3.- Yo no tengo por qué decírselo.
			 </div>
		</div>
 </div>
<div>
	 105  Siempre tengo que estar luchando contra mi timidez
		<div class="input-group">
			 <div>
 			 <input name="pregunta104" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta104" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta104" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 106  Los profesores, sacerdotes y otras personas emplean mucho tiempo intentando impedir hacer lo que deseamos
		<div class="input-group">
			 <div>
 			 <input name="pregunta105" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta105" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta105" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 107  Cuando estoy con un grupo, normalmente me siento , escucho y dejo que los demás lleven el peso de la conversación
		<div class="input-group">
			 <div>
 			 <input name="pregunta106" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta106" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta106" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 108  Normalmente aprecio más la belleza de un poema que una excelente estrategia en un deporte
		<div class="input-group">
			 <div>
 			 <input name="pregunta107" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta107" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta107" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 109  Si uno es franco y abierto, los demás intentan aprovecharse de él
		<div class="input-group">
			 <div>
 			 <input name="pregunta108" type="radio" aria-label="" value="1"> 1.- Casi Nunca
			 </div>
			 <div>
 			 <input name="pregunta108" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta108" type="radio" aria-label="" value="1"> 3.- A menudo
			 </div>
		</div>
 </div>
<div>
	 110  Siempre me interesan las cosas mecánicas y soy bastante bueno para arreglarlas
		<div class="input-group">
			 <div>
 			 <input name="pregunta109" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta109" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta109" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 111  A veces estoy tan enfrascado en mis pensamientos que, a no ser que salga de ellos, pierdo la noción del tiempo y desordeno o no  encuentro mis cosas
		<div class="input-group">
			 <div>
 			 <input name="pregunta110" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta110" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta110" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 112  Parece como si no pudiera confiar en más de la mitad de la gente que voy conociendo
		<div class="input-group">
			 <div>
 			 <input name="pregunta111" type="radio" aria-label="" value="1"> 1.- Verdadero, no se puede confiar en ella
			 </div>
			 <div>
 			 <input name="pregunta111" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta111" type="radio" aria-label="" value="1"> 3.- Falso, se puede confiar en ella
			 </div>
		</div>
 </div>
<div>
	 113  Normalmente descubro que conozco a los demás mejor que ellos me conocen a mí
		<div class="input-group">
			 <div>
 			 <input name="pregunta112" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta112" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta112" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 114  A menudo, los demás dicen que mis ideas son realistas y prácticas
		<div class="input-group">
			 <div>
 			 <input name="pregunta113" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta113" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta113" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 115  Si creo que lo merecen, hago agudas y sarcásticas observaciones a los demás
		<div class="input-group">
			 <div>
 			 <input name="pregunta114" type="radio" aria-label="" value="1"> 1.- A veces
			 </div>
			 <div>
 			 <input name="pregunta114" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta114" type="radio" aria-label="" value="1"> 3.- Nunca
			 </div>
		</div>
 </div>
<div>
	 116  A veces me siento como si hubiera hecho algo malo, aunque realmente no lo haya hecho
		<div class="input-group">
			 <div>
 			 <input name="pregunta115" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta115" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta115" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 117  Me resulta fácil hablar sobre mi vida, incluso sobre aspectos que otros considerarían muy personales
		<div class="input-group">
			 <div>
 			 <input name="pregunta116" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta116" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta116" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 118  Me gusta diseñar modos por los que el mundo pudiera cambiar y mejorar
		<div class="input-group">
			 <div>
 			 <input name="pregunta117" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta117" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta117" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 119  Tiendo a ser muy sensible y a preocuparme mucho acerca de algo que he hecho
		<div class="input-group">
			 <div>
 			 <input name="pregunta118" type="radio" aria-label="" value="1"> 1.- Casi nunca
			 </div>
			 <div>
 			 <input name="pregunta118" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta118" type="radio" aria-label="" value="1"> 3.- A menudo
			 </div>
		</div>
 </div>
<div>
	 120  En el períodico que acostumbro a hojear, me intereso más por
		<div class="input-group">
			 <div>
 			 <input name="pregunta119" type="radio" aria-label="" value="1"> 1.- Los artículos sobre problemas sociales
			 </div>
			 <div>
 			 <input name="pregunta119" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta119" type="radio" aria-label="" value="1"> 3.- Todas las noticias locales
			 </div>
		</div>
 </div>
<div>
	 121  Preferiría emplear una tarde libre en
		<div class="input-group">
			 <div>
 			 <input name="pregunta120" type="radio" aria-label="" value="1"> 1.- Leer o trabajar en solitario en un proyecto
			 </div>
			 <div>
 			 <input name="pregunta120" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta120" type="radio" aria-label="" value="1"> 3.- Hacer alguna tarea con los amigos
			 </div>
		</div>
 </div>
<div>
	 122  Cuando hay algo molesto que hacerlo, prefiero
		<div class="input-group">
			 <div>
 			 <input name="pregunta121" type="radio" aria-label="" value="1"> 1.- Dejarlo a un lado hasta que no haya más remedio que hacerlo
			 </div>
			 <div>
 			 <input name="pregunta121" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta121" type="radio" aria-label="" value="1"> 3.- Comenzar a hacerlo de inmediato
			 </div>
		</div>
 </div>
<div>
	 123  Prefiero tomar la comida de mediodía
		<div class="input-group">
			 <div>
 			 <input name="pregunta122" type="radio" aria-label="" value="1"> 1.- Con un grupo de gente
			 </div>
			 <div>
 			 <input name="pregunta122" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta122" type="radio" aria-label="" value="1"> 3.- En solitario
			 </div>
		</div>
 </div>
<div>
	 124  Soy paciente con las personas, incluso cuando no son corteses y consideradas con mis sentimientos
		<div class="input-group">
			 <div>
 			 <input name="pregunta123" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta123" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta123" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 125  Cuando hago algo, normalmente me tomo tiempo para pensar antes en todo lo que necesito para la tarea
		<div class="input-group">
			 <div>
 			 <input name="pregunta124" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta124" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta124" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 126  Me siento molesto cuando la gente emplea mucho tiempo para explicar algo
		<div class="input-group">
			 <div>
 			 <input name="pregunta125" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta125" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta125" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 127  Mis amigos probablemente me describen como una persona
		<div class="input-group">
			 <div>
 			 <input name="pregunta126" type="radio" aria-label="" value="1"> 1.- Cálida y amable
			 </div>
			 <div>
 			 <input name="pregunta126" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta126" type="radio" aria-label="" value="1"> 3.- Formal y objetiva
			 </div>
		</div>
 </div>
<div>
	 128  Cuando algo me perturba, normalmente me olvido pronto de ello
		<div class="input-group">
			 <div>
 			 <input name="pregunta127" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta127" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta127" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 129  Como afición agradable prefiero
		<div class="input-group">
			 <div>
 			 <input name="pregunta128" type="radio" aria-label="" value="1"> 1.- Hacer o reparar algo
			 </div>
			 <div>
 			 <input name="pregunta128" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta128" type="radio" aria-label="" value="1"> 3.- Trabajar en grupo en una tarea comunitaria
			 </div>
		</div>
 </div>
<div>
	 130  Creo que debo reclamar si en el restaurante recibo mal servicio o alimentos deficientes
		<div class="input-group">
			 <div>
 			 <input name="pregunta129" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta129" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta129" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 131  Tengo más cambios de humor que la mayoría de las personas que conozco
		<div class="input-group">
			 <div>
 			 <input name="pregunta130" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta130" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta130" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 132  Cuando los demás no ven las cosas como las veo yo, normalmente logro convencerlos
		<div class="input-group">
			 <div>
 			 <input name="pregunta131" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta131" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta131" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 133  Creo que ser libre para hacer lo que desee es más importante que tener buenos modales y respetar las normas
		<div class="input-group">
			 <div>
 			 <input name="pregunta132" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta132" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta132" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 134  Me encanta hacer  reír a la gente con historias ingeniosas
		<div class="input-group">
			 <div>
 			 <input name="pregunta133" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta133" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta133" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 135  Me considero una persona socialmente muy atrevida y comunicativa
		<div class="input-group">
			 <div>
 			 <input name="pregunta134" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta134" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta134" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 136  Si una persona es lo suficientemente lista para eludir las normas sin que parezca que las incumple
		<div class="input-group">
			 <div>
 			 <input name="pregunta135" type="radio" aria-label="" value="1"> 1.- Podría incumplirlas si tiene razones especiales para ello
			 </div>
			 <div>
 			 <input name="pregunta135" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta135" type="radio" aria-label="" value="1"> 3.- Debería seguirlas a pesar de todo
			 </div>
		</div>
 </div>
<div>
	 137  Cuando me uno a un nuevo grupo, normalmente encajo pronto
		<div class="input-group">
			 <div>
 			 <input name="pregunta136" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta136" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta136" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 138  Prefiero leer historietas rudas o de ficción realista más que novelas sentimentales e imaginativas
		<div class="input-group">
			 <div>
 			 <input name="pregunta137" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta137" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta137" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 139  Sospecho que la persona que se muestra abiertamente amigable conmigo puede ser desleal cuando ya no esté delante
		<div class="input-group">
			 <div>
 			 <input name="pregunta138" type="radio" aria-label="" value="1"> 1.- Casi nunca
			 </div>
			 <div>
 			 <input name="pregunta138" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta138" type="radio" aria-label="" value="1"> 3.- A menudo
			 </div>
		</div>
 </div>
<div>
	 140  Cuando era niño, empleaba la mayor parte de mi tiempo en
		<div class="input-group">
			 <div>
 			 <input name="pregunta139" type="radio" aria-label="" value="1"> 1.- Hacer o construir algo
			 </div>
			 <div>
 			 <input name="pregunta139" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta139" type="radio" aria-label="" value="1"> 3.- Leer o imaginar cosas ideales
			 </div>
		</div>
 </div>
<div>
	 141  Muchas personas son demasiado quisquillosas y sensibles, y por su propio bien deberían endurecerse
		<div class="input-group">
			 <div>
 			 <input name="pregunta140" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta140" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta140" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 142  Me muestro tan interesado en pensar en las ideas que a veces paso por alto los detalles prácticos
		<div class="input-group">
			 <div>
 			 <input name="pregunta141" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta141" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta141" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 143  Si alguien me hace una pregunta demasiado personal, intento cuidadosamente evitar contestarla
		<div class="input-group">
			 <div>
 			 <input name="pregunta142" type="radio" aria-label="" value="1"> 1.- Normalmente verdadero
			 </div>
			 <div>
 			 <input name="pregunta142" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta142" type="radio" aria-label="" value="1"> 3.- Normalmente falso
			 </div>
		</div>
 </div>
<div>
	 144  Cuando me piden  hacer una tarea voluntaria digo que estoy demasiado ocupado
		<div class="input-group">
			 <div>
 			 <input name="pregunta143" type="radio" aria-label="" value="1"> 1.- A veces
			 </div>
			 <div>
 			 <input name="pregunta143" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta143" type="radio" aria-label="" value="1"> 3.- Raras Veces
			 </div>
		</div>
 </div>
<div>
	 145  Mis amigos me consideran una persona algo abstraída y no siempre práctica
		<div class="input-group">
			 <div>
 			 <input name="pregunta144" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta144" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta144" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 146  Me siento muy abatido cuando la gente me critica en un grupo
		<div class="input-group">
			 <div>
 			 <input name="pregunta145" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta145" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta145" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 147  Les surgen más problemas a quienes
		<div class="input-group">
			 <div>
 			 <input name="pregunta146" type="radio" aria-label="" value="1"> 1.- Se cuestionan o cambian métodos que son ya satisfactorios
			 </div>
			 <div>
 			 <input name="pregunta146" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta146" type="radio" aria-label="" value="1"> 3.- Descartan enfoques nuevos o prometedores
			 </div>
		</div>
 </div>
<div>
	 148  Soy muy cuidadoso cuando se trata de elegir a alguien con quien abrirme francamente
		<div class="input-group">
			 <div>
 			 <input name="pregunta147" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta147" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta147" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 149  Me gusta más intentar nuevos modos de hacer las cosas que seguir caminos ya conocidos
		<div class="input-group">
			 <div>
 			 <input name="pregunta148" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta148" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta148" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 150  Los demás dicen que suelo ser demasiado crítico conmigo mismo
		<div class="input-group">
			 <div>
 			 <input name="pregunta149" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta149" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta149" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 151  Generalmente me gusta más una comida si contiene alimentos familiares y cotidianos que si tiene alimentos poco corrientes
		<div class="input-group">
			 <div>
 			 <input name="pregunta150" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta150" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta150" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 152  Puedo pasar fácilmente un mañana entera sin tener necesidad de hablar con alguien
		<div class="input-group">
			 <div>
 			 <input name="pregunta151" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta151" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta151" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 153  Deseo ayudar a las personas
		<div class="input-group">
			 <div>
 			 <input name="pregunta152" type="radio" aria-label="" value="1"> 1.- Siempre
			 </div>
			 <div>
 			 <input name="pregunta152" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta152" type="radio" aria-label="" value="1"> 3.- A veces
			 </div>
		</div>
 </div>
<div>
	 154  Yo creo que
		<div class="input-group">
			 <div>
 			 <input name="pregunta153" type="radio" aria-label="" value="1"> 1.- Algunos trabajos no deberían ser hechos  tan cuidadosamente como otros
			 </div>
			 <div>
 			 <input name="pregunta153" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta153" type="radio" aria-label="" value="1"> 3.- Cualquier trabajo habría que hacerlo bien si es que se ha a hacer
			 </div>
		</div>
 </div>
<div>
	 155  Me resulta difícil ser paciente cuando la gente me critica
		<div class="input-group">
			 <div>
 			 <input name="pregunta154" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta154" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta154" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 156  Prefiero los momentos en que hay gente a mi alrededor
		<div class="input-group">
			 <div>
 			 <input name="pregunta155" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta155" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta155" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 157  Cuando realizo una tarea, no me encuentro satisfecho a no ser que ponga especial atención incluso a los pequeños detalles
		<div class="input-group">
			 <div>
 			 <input name="pregunta156" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta156" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta156" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 158  Algunas veces me sacan de quicio de un modo insoportable aquellas pequeñas cosas, aunque reconozca que son triviales
		<div class="input-group">
			 <div>
 			 <input name="pregunta157" type="radio" aria-label="" value="1"> 1.- Si
			 </div>
			 <div>
 			 <input name="pregunta157" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta157" type="radio" aria-label="" value="1"> 3.- No
			 </div>
		</div>
 </div>
<div>
	 159  Me gusta más escuchar a la gente hablar de sus sentimientos personales  que de otros temas
		<div class="input-group">
			 <div>
 			 <input name="pregunta158" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta158" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta158" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 160  Hay ocasiones en que no me siento de humor para ver a nadie
		<div class="input-group">
			 <div>
 			 <input name="pregunta159" type="radio" aria-label="" value="1"> 1.- Muy raras veces
			 </div>
			 <div>
 			 <input name="pregunta159" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta159" type="radio" aria-label="" value="1"> 3.- Bastante a menudo
			 </div>
		</div>
 </div>
<div>
	 161  Me gustaría más ser consejero orientador que arquitecto
		<div class="input-group">
			 <div>
 			 <input name="pregunta160" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta160" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta160" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 162  En mi vida cotidiana casi nunca me encuentro con problemas que no puedo afrontar
		<div class="input-group">
			 <div>
 			 <input name="pregunta161" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta161" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta161" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 163  Cuando las personas  hacen algo que me molesta, normalmente
		<div class="input-group">
			 <div>
 			 <input name="pregunta162" type="radio" aria-label="" value="1"> 1.- No le doy importancia
			 </div>
			 <div>
 			 <input name="pregunta162" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta162" type="radio" aria-label="" value="1"> 3.- Se lo digo
			 </div>
		</div>
 </div>
<div>
	 164  Yo creo más en
		<div class="input-group">
			 <div>
 			 <input name="pregunta163" type="radio" aria-label="" value="1"> 1.- Ser claramente serio en la vida cotidiana
			 </div>
			 <div>
 			 <input name="pregunta163" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta163" type="radio" aria-label="" value="1"> 3.- Seguir casi siempre el dicho "Diviértete y sé feliz"
			 </div>
		</div>
 </div>
<div>
	 165  Me gusta que haya alguna competitividad en las cosas que hago
		<div class="input-group">
			 <div>
 			 <input name="pregunta164" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta164" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta164" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 166  La mayoría de las normas se han hecho para no cumplirlas cuando haya buenas razones para ello
		<div class="input-group">
			 <div>
 			 <input name="pregunta165" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta165" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta165" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 167  Me cuesta bastante hablar delante de un grupo numeroso de personas
		<div class="input-group">
			 <div>
 			 <input name="pregunta166" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta166" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta166" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 168  Preferiría un hogar en el que
		<div class="input-group">
			 <div>
 			 <input name="pregunta167" type="radio" aria-label="" value="1"> 1.- Se sigan normas estrictas de conducta
			 </div>
			 <div>
 			 <input name="pregunta167" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta167" type="radio" aria-label="" value="1"> 3.- No haya muchas normas
			 </div>
		</div>
 </div>
<div>
	 169  En las reuniones sociales suelo sentirme tímido e inseguro de mí mismo
		<div class="input-group">
			 <div>
 			 <input name="pregunta168" type="radio" aria-label="" value="1"> 1.- Verdadero
			 </div>
			 <div>
 			 <input name="pregunta168" type="radio" aria-label="" value="1"> 2.- ¿?
			 </div>
			 <div>
 			 <input name="pregunta168" type="radio" aria-label="" value="1"> 3.- Falso
			 </div>
		</div>
 </div>
<div>
	 170  En la televisión prefiero
		<div class="input-group">
			 <div>
 			 <input name="pregunta169" type="radio" aria-label="" value="1"> 1.-  Un programa sobre nuevos inventos prácticos
			 </div>
			 <div>
 			 <input name="pregunta169" type="radio" aria-label="" value="1"> 2.- ?
			 </div>
			 <div>
 			 <input name="pregunta169" type="radio" aria-label="" value="1"> 3.- Un concierto de un artista famoso
			 </div>
		</div>
 </div>
<div>
	 171  Minuto es a hora, como segundo es a
		<div class="input-group">
			 <div>
 			 <input name="pregunta170" type="radio" aria-label="" value="1"> 1.- minuto
			 </div>
			 <div>
 			 <input name="pregunta170" type="radio" aria-label="" value="1"> 2.- milisegundo
			 </div>
			 <div>
 			 <input name="pregunta170" type="radio" aria-label="" value="1"> 3.- Hora
			 </div>
		</div>
 </div>
<div>
	 172  Renacuajo es a rana como larva es a
		<div class="input-group">
			 <div>
 			 <input name="pregunta171" type="radio" aria-label="" value="1"> 1.- Araña
			 </div>
			 <div>
 			 <input name="pregunta171" type="radio" aria-label="" value="1"> 2.- Gusano
			 </div>
			 <div>
 			 <input name="pregunta171" type="radio" aria-label="" value="1"> 3.- Insecto
			 </div>
		</div>
 </div>
<div>
	 173  Jamón es a cerdo como chuleta es a
		<div class="input-group">
			 <div>
 			 <input name="pregunta172" type="radio" aria-label="" value="1"> 1.- Cordero
			 </div>
			 <div>
 			 <input name="pregunta172" type="radio" aria-label="" value="1"> 2.- Pollo
			 </div>
			 <div>
 			 <input name="pregunta172" type="radio" aria-label="" value="1"> 3.- Merluza
			 </div>
		</div>
 </div>
<div>
	 174  Hielo es a agua como roca es a
		<div class="input-group">
			 <div>
 			 <input name="pregunta173" type="radio" aria-label="" value="1"> 1.- Larva
			 </div>
			 <div>
 			 <input name="pregunta173" type="radio" aria-label="" value="1"> 2.- Arena
			 </div>
			 <div>
 			 <input name="pregunta173" type="radio" aria-label="" value="1"> 3.- Petróleo
			 </div>
		</div>
 </div>
<div>
	 175  Mejor es a pésimo como peor es a
		<div class="input-group">
			 <div>
 			 <input name="pregunta174" type="radio" aria-label="" value="1"> 1.- Malo
			 </div>
			 <div>
 			 <input name="pregunta174" type="radio" aria-label="" value="1"> 2.- Santo
			 </div>
			 <div>
 			 <input name="pregunta174" type="radio" aria-label="" value="1"> 3.- Óptimo
			 </div>
		</div>
 </div>
<div>
	 176  ¿Cuál de las tres palabras indica algo diferente de las otras dos?
		<div class="input-group">
			 <div>
 			 <input name="pregunta175" type="radio" aria-label="" value="1"> 1.- Terminal
			 </div>
			 <div>
 			 <input name="pregunta175" type="radio" aria-label="" value="1"> 2.- Estacional
			 </div>
			 <div>
 			 <input name="pregunta175" type="radio" aria-label="" value="1"> 3.- Cíclico
			 </div>
		</div>
 </div>
<div>
	 177  ¿Cuál de las tres palabras indica algo diferente de las otras dos?
		<div class="input-group">
			 <div>
 			 <input name="pregunta176" type="radio" aria-label="" value="1"> 1.- Gato
			 </div>
			 <div>
 			 <input name="pregunta176" type="radio" aria-label="" value="1"> 2.- Cerca
			 </div>
			 <div>
 			 <input name="pregunta176" type="radio" aria-label="" value="1"> 3.- Planeta
			 </div>
		</div>
 </div>
<div>
	 178  Lo opuesto de correcto es lo opuesto de
		<div class="input-group">
			 <div>
 			 <input name="pregunta177" type="radio" aria-label="" value="1"> 1.- Bueno
			 </div>
			 <div>
 			 <input name="pregunta177" type="radio" aria-label="" value="1"> 2.- Erróneo
			 </div>
			 <div>
 			 <input name="pregunta177" type="radio" aria-label="" value="1"> 3.- Adecuado
			 </div>
		</div>
 </div>
<div>
	 179  ¿Cuál de las tres palabras indica algo diferente de las otras dos?
		<div class="input-group">
			 <div>
 			 <input name="pregunta178" type="radio" aria-label="" value="1"> 1.- Probable
			 </div>
			 <div>
 			 <input name="pregunta178" type="radio" aria-label="" value="1"> 2.- Eventual
			 </div>
			 <div>
 			 <input name="pregunta178" type="radio" aria-label="" value="1"> 3.- Inseguro
			 </div>
		</div>
 </div>
<div>
	 180  Lo opuesto de lo opuesto de inexacto es
		<div class="input-group">
			 <div>
 			 <input name="pregunta179" type="radio" aria-label="" value="1"> 1.- Casual
			 </div>
			 <div>
 			 <input name="pregunta179" type="radio" aria-label="" value="1"> 2.- Puntual
			 </div>
			 <div>
 			 <input name="pregunta179" type="radio" aria-label="" value="1"> 3.- Incorrecto
			 </div>
		</div>
 </div>
<div>
	 181  ¿Qué número debe seguir al final de éstos? 1 - 4 - 9 - 16
		<div class="input-group">
			 <div>
 			 <input name="pregunta180" type="radio" aria-label="" value="1"> 1.-     20
			 </div>
			 <div>
 			 <input name="pregunta180" type="radio" aria-label="" value="1"> 2.-     25
			 </div>
			 <div>
 			 <input name="pregunta180" type="radio" aria-label="" value="1"> 3.-		32
			 </div>
		</div>
 </div>
<div>
	 182  ¿Qué letra debe seguir al final de éstas? A - B - D - G - …
		<div class="input-group">
			 <div>
 			 <input name="pregunta181" type="radio" aria-label="" value="1"> 1.- H
			 </div>
			 <div>
 			 <input name="pregunta181" type="radio" aria-label="" value="1"> 2.- K
			 </div>
			 <div>
 			 <input name="pregunta181" type="radio" aria-label="" value="1"> 3.- L
			 </div>
		</div>
 </div>
<div>
	 183  ¿Qué letra debe seguir al final de éstas?  E  -  I  -  L  …
		<div class="input-group">
			 <div>
 			 <input name="pregunta182" type="radio" aria-label="" value="1"> 1.- M
			 </div>
			 <div>
 			 <input name="pregunta182" type="radio" aria-label="" value="1"> 2.- N
			 </div>
			 <div>
 			 <input name="pregunta182" type="radio" aria-label="" value="1"> 3.- O
			 </div>
		</div>
 </div>
<div>
	 184  ¿Qué número debe seguir al final de éstos? 1/12  -  1/6  -  1/3  -  2/3  …
		<div class="input-group">
			 <div>
 			 <input name="pregunta183" type="radio" aria-label="" value="1"> 1.- 3/4
			 </div>
			 <div>
 			 <input name="pregunta183" type="radio" aria-label="" value="1"> 2.- 4/3
			 </div>
			 <div>
 			 <input name="pregunta183" type="radio" aria-label="" value="1"> 3.- 3/2
			 </div>
		</div>
 </div>
<div>
	 185  ¿Qué número debe seguir al final de éstos? 1   2   0   3  -1  …
		<div class="input-group">
			 <div>
 			 <input name="pregunta184" type="radio" aria-label="" value="1"> 1.-  5
			 </div>
			 <div>
 			 <input name="pregunta184" type="radio" aria-label="" value="1"> 2.-  4
			 </div>
			 <div>
 			 <input name="pregunta184" type="radio" aria-label="" value="1"> 3.-  3			 </div>
		</div>
 </div>

			</div> <!--preguntas-->
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
@endsection