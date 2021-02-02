<?php
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 9/01/21
 * Time: 9:30
 */

namespace App\Mail;

use App\Mail\SendEmail;
class EmailTagDomicilio extends SendEmail
{
    private $data;
    private $mysubject;
    private $myfrom;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $input)
    {
        /*
        $parameters = [
            'subject' => 'Tag a domicilio',
            'from' => 'tagDomicilio@gmail.com',
            'email' => 'alberto.fonsecaq@gmail.com',
            'data' => $data
        ];
        */
        $this->data = $input['data'];
        $this->mysubject = $input['subject'];
        $this->myfrom = $input['from'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.tagDomicilio')
                    ->subject($this->mysubject)
                    ->from($this->myfrom)
                    ->with(['data' => json_decode($this->data)]);
    }
}