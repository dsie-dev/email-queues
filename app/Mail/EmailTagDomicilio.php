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
        if (isset($this->data['url_abbr']) && ($this->data['url_abbr']=="cn" || $this->data['url_abbr']=="avs" )){
            return $this->view('email.tagDomicilioCN')
                ->subject($this->mysubject)
                ->from($this->myfrom)
                ->with(['data' => $this->data]);
        }
        return $this->view('email.tagDomicilio')
                    ->subject($this->mysubject)
                    ->from($this->myfrom)
                    ->with(['data' => $this->data]);
    }
}