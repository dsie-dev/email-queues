<!DOCTYPE html>
<html>
<head></head>
<body>
<p>Estimado(a) {{ isset($data['cliente']) ? $data['cliente'] : "" }}</p>
<p>Su solicitud de servicio <strong>{{ $data['servicio'] }}</strong> se ha recibido exitosamente.  @if ($data['existe_cod_descuento'] != true ) Se revisarán sus documentos y en menos de 24 horas hábiles se le confirmará que estos estén correctos para que realice el pago. @endif Para consultar el estado de la gestión, ingrese a
    <a href="https://tad.integrocorp.cl/{{ $data['url_abbr'] }}">nuestro sitio</a> y en la sección "Consulte el estado de su solicitud", digite el número de rut asociado a la
    solicitud y el número de ticket.</p>
<p><strong>RUT</strong> {{ $data['rut'] }}</p>
<p><strong>No. de ticket</strong> {{ $data['ticket'] }}</p><br>

<p>Atentamente,</p>
<p>TAD Equipo Atención al cliente</p><br>

<small>Este mail se ha enviado automáticamente, por favor no responda al mismo.</small><br>
</body>
</html>