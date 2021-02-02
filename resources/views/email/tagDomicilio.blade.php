<!DOCTYPE html>
<html>
<head>
  <!--  <title>How to send mail using queue in Laravel 6? - ItSolutionStuff.com</title> -->
</head>
<body>
<p>Estimado(a) {{ $data->cliente }}</p>
<p>Su solicitud de servicio <strong>{{ $data->servicio }}</strong> se ha recibido exitosamente.  @if ($data->existe_cod_descuento != true )Para continuar con el servicio, es necesario que realice el pago. @endif Para consultar el estado de la gestión, ingrese a
    <a href="http://tad.integrocorp.cl/{{ $data->url_abbr }}">nuestro sitio</a> y en la sección "Consulte el estado de su solicitud", digite el número de rut asociado a la
    solicitud y el número de ticket.</p>
<p><strong>RUT</strong> {{ $data->rut }}</p>
<p><strong>No. de ticket</strong> {{ $data->ticket }}</p><br>

<p>Atentamente,</p>
<p>TAD Equipo Atención al cliente</p><br>

<small>Este mail se ha enviado automáticamente, por favor no responda al mismo.</small><br>





<!--
<center>
    <h2 style="padding: 23px;background: #b3deb8a1;border-bottom: 6px green solid;">
        <a href="https://itsolutionstuff.com">Visit Our Website : ItSolutionStuff.com</a>
    </h2>
</center>

<p>Hi, Sir</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<strong>Thank you Sir. :)</strong>


-->


</body>
</html>