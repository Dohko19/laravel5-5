@component('mail::message')
# SolexVintel

<p> Gracias por responder la encuesta {{ $data->nombre }}</p></br>

<p> Estos Fueron tus resultados</p>


@component('mail::panel')
   <b>Tu resultado:</b>
	
   <strong>@if($data->s>=60)
    Tienes un tipo de pensamiento Sintetico<br>
	@elseif($data->i>=60)
	Tienes un tipo de pensamiento Idealista<br>
	@elseif($data->p>=60)
	Tienes un tipo de pensamiento Pragmatico<br>
	@elseif($data->a>=60)
	Tienes un tipo de pensamiento Analitico<br>
	@elseif($data->r>=60)
	Tienes un tipo de pensamiento Realista<br>
	@else
	<i></i>
	@endif</strong>
	
@endcomponent

<i>Donde:<br><br>Pensamiento  

	@if($data->s>=60)
  	 Sintetico:<br><br>
  	 <b>CARACTERISTICAS:</b> <br>
  	 <br><b>Fortalezas:</b> <br> 
  	 <br><b>DEBILIDADES:</b> <br><br>
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
