@component('mail::message')
# SolexVintel

<p> Gracias por responder la encuesta: {{ $data->nombre }}</p></br>

<p> En el siguiente apartado podras ver tus resultados.</p>


@component('mail::panel')
  <b>Tienes un tipo de pensamiento:</b>
  <ul>
   <strong>@if($data->s>=60)
    <li>Sintetico</li><br>
    @endif
	@if($data->i>=60)
	<li> Idealista</li><br>
	@endif
	@if($data->p>=60)
	<li> Pragmatico</li><br>
	@endif
	@if($data->a>=60)
	<li> Analitico</li><br>
	@endif
	@if($data->r>=60)
	<li>Realista</li><br>
	@endif
	</ul>
@endcomponent

<i>Donde:<br><br>Pensamiento  

	@if($data->s>=60)
  	 <b>Sintetico:</b><br><br>
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
     @endif
	@if($data->i>=60)
	<b>Idealista:</b><br><br>
	<b>CARACTERISTICAS:</b> <br>
  	 <br><b>Fortalezas:</b>: <br> 
  	 <br><b>DEBILIDADES:</b> <br><br>
     @endif
	@if($data->p>=60)
	<b>Pragmatico:</b><br><br>
	<b>CARACTERISTICAS:</b> <br>
  	 <br><b>Fortalezas:</b>: <br> 
  	 <br><b>DEBILIDADES:</b> <br><br>
     @endif
	@if($data->a>=60)
	<b>Analitico:</b><br><br>
	<b>CARACTERISTICAS:</b> <br>
  	 <br><b>Fortalezas:</b>: <br> 
  	 <br><b>DEBILIDADES:</b> <br><br>
     @endif
	@if($data->r>=60)
	<b>Realista:</b><br><br>
	<b>CARACTERISTICAS:</b> <br>
  	 <br><b>Fortalezas:</b>: <br> 
  	 <br><b>DEBILIDADES:</b> <br><br>
	@endif</i><br><br>


<hr>
@component('mail::footer')
Copyright© {{ date('Y') }}. Derechos Reservados<br><br>
Pagina realizada por: Trejo Rojas Daniel Arturo @ daniel.rojas.art93@gmail.com - Beta v0.1
<br><br>Copyright© 1977, 1980. Bramson, Parlette, Harrison and Associates All Rights Reserver "The art of Thinking"

@endcomponent

@endcomponent
