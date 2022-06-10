<!DOCTYPE html>
<html>
<head>
    <!--  <title>How to send mail using queue in Laravel 6? - ItSolutionStuff.com</title> -->
</head>
<body>
<p>Estimado(a) {{ isset($data['cliente']) ? $data['cliente'] : "" }}</p>
<p>Su solicitud de servicio <strong>{{ $data['servicio'] }}</strong> se ha recibido
    exitosamente. @if ($data['existe_cod_descuento'] != true )  @if( isset($data['url_abbr']) && ($data['url_abbr']=="cn" || $data['url_abbr']=="avs" ))
        Se revisarán sus documentos y en menos de 24 horas hábiles se le confirmará que estos estén correctos para que
        realice el pago. @else Para continuar con el servicio, es necesario <a href="{{ $data['linkpayment'] }}">realizar
            el pago</a>. @endif @endif Para consultar el estado de la gestión, ingrese a
    <a href="https://tad.integrocorp.cl/{{ $data['url_abbr'] }}">nuestro sitio</a> y en la sección "Consulte el estado
    de su solicitud", digite el número de rut asociado a la
    solicitud y el número de ticket.</p>
<p><strong>RUT</strong> {{ $data['rut'] }}</p>
<p><strong>No. de ticket</strong> {{ $data['ticket'] }}</p><br>

@if (isset($data['url_abbr']) && $data['url_abbr'] == 'ac')
    <p>Adicional a lo anterior, le mostramos los <a target="_blank" href="{{$data['terminos_condiciones_url']}}">términos y condiciones</a> aceptados al momento de solicitar el servicio.</p>
@endif

<p>Atentamente,</p>
<p>TAD Equipo Atención al cliente</p><br>

<small>Este mail se ha enviado automáticamente, por favor no responda al mismo.</small>
<br>
</body>
</html>
