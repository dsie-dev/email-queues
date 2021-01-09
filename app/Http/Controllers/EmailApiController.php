<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;
use Illuminate\Http\Response;

class EmailApiController extends Controller
{
    public function sendEmailQueue(Request $request)
    {
        $data = array(
            'cliente' => 'Alberto Fonseca Quintanell',
            'rut' => '18.168.926-9',
            'ticket' => 676,
            'autopista' => 'Costanera Norte',
            'servicio' => 'Devuelve tu Ticket',
            'url_abbr' => 'CN',
            'existe_cod_descuento' => false
        );

        $parameters = [
            'subject' => 'Tag a domicilio',
            'from' => 'alberto.fonsecaq@gmail.com',
            'email' => 'alberto.fonsecaq@gmail.com',
            'data' => $data
        ];



        SendEmailJob::dispatch($parameters)
            ->onQueue('email');

        return \response(['status' => true],200);
    }
}
