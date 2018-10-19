@component('mail::message')
# SolexVintel
@if($data->ninguno==0)
<p> Gracias por responder la encuesta: {{ $data->nombre }}</p></br>
<p> En este momento sus resultados no arrojaron una opcion concluyente</p>
<p>Estos fueron tus resultados</p>
@component('mail::table')
| Sintetico      | Idealista      | Pragmatico     | Analista       | Realista       |
|:--------------:|:--------------:|:--------------:|:--------------:| :------------: |
| {{ $data->s }} | {{ $data->i }} | {{ $data->p }} | {{ $data->a }} | {{ $data->r }} |

@endcomponent
@component('mail::panel')
<p>Donde:</p>
<b>Si tu puntaje es mayor a 60 tu tipo de pensamiento se asemeja a este. <br> 
</b>

@endcomponent
@component('mail::footer')
Pagina realizada por: Trejo Rojas Daniel Arturo @ daniel.rojas.art93@gmail.com - Beta v0.1
<br><br>Copyright© 1977, 1980. Bramson, Parlette, Harrison and Associates All Rights Reserver "The art of Thinking"

@endcomponent
@else
<p> Gracias por responder la encuesta: {{ $data->nombre }}</p></br>
<p> En el siguiente apartado podras ver tus resultados.</p>

@component('mail::table')
| Sintetico      | Idealista      | Pragmatico     | Analista       | Realista       |
|:--------------:|:--------------:|:--------------:|:--------------:| :------------: |
| {{ $data->s }} | {{ $data->i }} | {{ $data->p }} | {{ $data->a }} | {{ $data->r }} |

@endcomponent

@component('mail::panel')
<p>Donde:</p>
<b>Si tu puntaje es mayor a 60 tu tipo de pensamiento se asemeja a este. <br> 
</b>

@endcomponent

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

@endcomponent

<i>Donde:<br><br>Pensamiento  

  @if($data->s>=60)
     <b>SINTETICO:</b><br><br>
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
  <b>IDEALISTA:</b><br><br>
  <b>CARACTERISTICAS:</b>
  <ul>
    <li>Sueles observar todo el panorama en lugar de un solo componente. </li>
    <li>Tiendes a interesarse más en las personas y sus sentimientos que en los hechos y los números.</li>
    <li>Eres receptivo ya que muestras interés en los valores. </li>
    <li>Para ti los datos y la teoría tienen el mismo valor. </li>
    <li>Además, prefieres pensar y planear para el futuro.</li>
  </ul> <br>
     <br><b>FORTALEZAS:</b>
     <ul>
       <li>Tienes buen enfoque en el proceso y las relaciones humanas.</li>
       <li>Pone valores y aspiraciones</li>
       <li>Bueno en encontrar los objetivos.</li>
       <li>Lo mejor en situaciones no estructuradas y cargadas de valores.</li>
       <li>Proporciona una visión amplia, objetivos y estándares.</li>
     </ul> <br> 
     <br><b>DEBILIDADES:</b>
     <ul>
       <li>Puede eliminar datos duros</li>
       <li>Puede retrasarse en tus elecciones por tener demasiadas opciones</li>
       <li>No eres escuchado por soluciones perfectas</li>
       <li>Puedes pasar por alto detalles importantes.</li>
       <li>Puedes aparecer muy sentimental</li>
     </ul> <br><br>
     @endif
  @if($data->p>=60)
  <b>PRAGMATICO:</b><br><br>
  <b>CARACTERISTICAS:</b>
  <ul>
       <li>Eres del tipo de personas que prefieren hacer “lo que sea que funcione”.</li>
       <li>Les va muy bien cuando piensan rápido y planean a corto plazo, además suelen ser creativos y adaptables al cambio. </li>
       <li>A veces, parece que hacen las cosas “al vuelo” sin planear nada en absoluto.</li>
     </ul> 
  <br>
     <br><b>FORTALEZAS:</b>
     <ul>
       <li>Enfocado en las metas Señalas tácticas y estrategias. </li>
       <li>Eres bueno en identificar los impactos. </li>
       <li>Lo mejor en situaciones incrementales complejas.</li>
       <li>Proporcionas experimentación e innovación.</li>
     </ul> 
     <br> 
     <br><b>DEBILIDADES:</b>
     <ul>
       <li>Puedes descartar los aspectos de largo alcance.</li>
       <li>Puedes precipitarte demasiado rápido para concluir tareas. </li>
       <li>Puedes esforzarte mucho por conveniencia</li>
       <li>Puede confiar demasiado en lo que “vende” y puedes parecer demasiado comprometedor.</li>
     </ul>
     <br><br>
     @endif
  @if($data->a>=60)
  <b>ANALITICO:</b><br><br>
  <b>CARACTERISTICAS:</b>
  <ul>
    <li>Los analistas tratan de descomponer los problemas hasta sus componentes específicos más que lidiar con ellos por completo.</li>
    <li>Ellos hacen listas, organizan sus cosas y usan muchos detalles, de forma que sus problemas y sus vidas permanecen de forma ordenada.</li>
    <li>Estas interesado en soluciones científicas prescriptivas Teoría y método sobre datos</li>
  </ul> <br>
     <br><b>FORTALEZAS:</b>
     <ul>
       <li>Tienes un buen enfoque en método y plan. </li>
       <li>Resaltas datos y detalles. </li>
       <li>Eres bueno en la construcción y planificación de modelos.</li>
       <li>Destacas lo mejor en situaciones estructuradas y calculables.</li>
       <li>Proporcionas estabilidad y estructura.</li>
     </ul> <br> 
     <br><b>DEBILIDADES:</b> 
     <ul>
       <li>Puedes descartar valores y subjetivos.</li>
       <li>Puedes sobre-planificar, sobre-analizar.</li>
       <li>Puede ser inflexible, demasiado cauteloso.</li>
       <li>Puede aparecer con visión de túnel.</li>
     </ul><br><br>
     @endif
  @if($data->r>=60)
  <b>REALISTA:</b><br><br>
  <b>CARACTERISTICAS:</b> 
  <ul>
    <li>Los realistas son los que hablan “tonterías”. </li>
    <li>Ellos hacen preguntas difíciles y tienden a hacer lo que se requiera para resolver un problema.</li>
    <li>Tienen una gran comprensión del problema y de las herramientas con las que lo pueden solucionar.</li>
    <li>También tienden a ser más conscientes de sus limitaciones.</li>
    <li>Muchas personas tienen al menos un poco de pensamiento realista en ellas.</li>
    <li>Posees una vista empírica e inducción.</li>
    <li>Te basas en hechos y en la opinión de expertos. </li>
    <li>Buscas soluciones que satisfagan las necesidades actuales.</li>
    <li>Estas interesado en encontrar resultados concretos Datos correctos sobre la teoría</li>
  </ul><br>
     <br><b>FORTALEZAS:</b>
     <ul>
       <li>Enfóquese en hechos y resultados. </li>
       <li>Señala realidades y recursos. </li>
       <li>Eres bueno para simplificar.</li>
       <li>Encuentras lo mejor en situaciones objetivas bien definidas.</li>
       <li>Proporcionas impulso hacia los que te rodean.</li>
     </ul> <br> 
     <br><b>DEBILIDADES:</b>
     <ul>
       <li>Puedes descartar el desacuerdo.</li>
       <li>Puedes precipitarse a soluciones demasiado simplificadas.</li>
       <li>Puedes intentar demasiado para el consenso y la respuesta inmediata</li>
       <li>Puedes sobre enfatizar los hechos percibidos.</li>
       <li>Puedes aparecer demasiado orientado a los resultados.</li>
     </ul> <br><br>
  @endif</i><br><br>


<hr>
@component('mail::footer')
Pagina realizada por: Trejo Rojas Daniel Arturo @ daniel.rojas.art93@gmail.com - Beta v0.1
<br><br>Copyright© 1977, 1980. Bramson, Parlette, Harrison and Associates All Rights Reserver "The art of Thinking"

@endcomponent
@endif
@endcomponent
