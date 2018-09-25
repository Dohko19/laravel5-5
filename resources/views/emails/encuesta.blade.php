@component('mail::message')
# SolexVintel

<p>Gracias por responder la encuesta {{ $data->nombre }}</p></br>

<p>Estos Fueron tus resultados</p>


@component('mail::panel')
    Tu resultado mas destacado fue: 

@endcomponent






Copyright© {{ date('Y') }}. Derechos Reservados
</br>
Autor: Trejo Rojas Daniel Arturo @ daniel.rojas.art93@gmail.com
@endcomponent
