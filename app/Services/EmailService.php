<?php

namespace App\Services;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailService extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;
    public string $_subject;
    public string $template;
    public function __construct($data, $subject, $template)
    {
        $this->data = $data;
        $this->_subject = $subject;
        $this->template = $template;
    }

    public function build(): EmailService
    {
        $data = $this->data;
        return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->subject($this->_subject)
            ->view('emails.'.$this->template, compact('data'));
    }
}
