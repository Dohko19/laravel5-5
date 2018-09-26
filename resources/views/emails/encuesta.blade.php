@component('mail::message')
# SolexVintel

<p> Gracias por responder la encuesta {{ $data->nombre }}</p></br>

<p> Estos Fueron tus resultados</p>


@component('mail::panel')
   <b>Tu resultado:</b>
	<?php  ?>
   <strong>@if($data->s>=60)
    Tienes un tipo de pensamiento Sintetico<br>
    @endif
	@if($data->i>=60)
	Tienes un tipo de pensamiento Idealista<br>
	@endif
	@if($data->p>=60)
	Tienes un tipo de pensamiento Pragmatico<br>
	@endif
	@if($data->a>=60)
	Tienes un tipo de pensamiento Analitico<br>
	@endif
	@if($data->r>=60)
	Tienes un tipo de pensamiento Realista<br>
	@endif
	@else
	<i></i>
	@endif</strong>
	
@endcomponent

<i>Donde:<br><br>Pensamiento  

	@if($data->s>=60)
  	 Sintetico:<br><br>
  	 <b>CARACTERISTICAS:</b>
  	 <ul>
  	 	<li>Tiendes a disfrutar del conflicto, posees una visión integradora. </li>
  	 	<li>Ves la similitud en aparentes desacuerdos. </li>
  	 	<li>Ofreces datos especulativos sin significado sin interpretación y utilizas ese conflicto para motivar tu propia creatividad y, usualmente, pueden ser mejores en ver todo el panorama.</li>
  	 </ul> <br>
  	 <br><b>FORTALEZAS:</b>
  	 <ul>
  	 	<li>Enfóquese en las suposiciones subyacentes</li>
  	 	<li>Señale los aspectos conceptuales abstractos. </li>
  	 	<li>Bueno en prever el exceso de acuerdo. </li>
  	 	<li>Mejor en situaciones controvertidas y cargadas de conflictos</li>
  	 	<li>Proporciona debate y creatividad.</li>
  	 </ul> <br> 
  	 <br><b>DEBILIDADES:</b>
  	 <ul>
  	 	<li>Puede descartar el acuerdo.</li>
  	 	<li>Puede buscar el conflicto innecesariamente.</li>
  	 	<li>Puede intentar demasiado por el cambio y la novedad.</li>
  	 	<li>Puede teorizar excesivamente </li>
  	 	<li>Puede parecer no conforme.</li>
  	 </ul> <br><br>
	@elseif($data->i>=60)
	Idealista:<br><br>
	<b>CARACTERISTICAS:</b> <br>
  	 <br><b>Fortalezas:</b>: <br> 
  	 <br><b>DEBILIDADES:</b> <br><br>
	@elseif($data->p>=60)
	Pragmatico:<br><br>
	<b>CARACTERISTICAS:</b> <br>
  	 <br><b>Fortalezas:</b>: <br> 
  	 <br><b>DEBILIDADES:</b> <br><br>
	@elseif($data->a>=60)
	Analitico:<br><br>
	<b>CARACTERISTICAS:</b> <br>
  	 <br><b>Fortalezas:</b>: <br> 
  	 <br><b>DEBILIDADES:</b> <br><br>
	@elseif($data->r>=60)
	Realista:<br><br>
	<b>CARACTERISTICAS:</b> <br>
  	 <br><b>Fortalezas:</b>: <br> 
  	 <br><b>DEBILIDADES:</b> <br><br>
	@endif</i><br><br>


Copyright© {{ date('Y') }}. Derechos Reservados<br><br>
Pagina echa por: Trejo Rojas Daniel Arturo @ daniel.rojas.art93@gmail.com<br><br>
#Copyright© 1977, 1980. Bramson, Parlette, Harrison and Associates All Rights Reserver "The art of Thinking"
@endcomponent
