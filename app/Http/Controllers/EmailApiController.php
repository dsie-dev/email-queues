<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;
use Illuminate\Http\Response;

class EmailApiController extends Controller
{
    public function sendEmailQueue(Request $request)
    {
        $parameters = $request->all();
        SendEmailJob::dispatch($parameters)
            ->onQueue('email');
        return \response(['status' => $parameters['data']],200);
    }
}
