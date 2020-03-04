<?php

namespace Application;
use Application\Provider\MailProviderInterface;
use mysql_xdevapi\Exception;

class MailSender
{
    private $mailProvider;
    /**
     * @var array
     */
    private $mail;
    public function __construct(MailProviderInterface $mailProvider)
    {
        $this->mailProvider = $mailProvider;
    }

    /**
     * compose email
     * @param $to
     * @param $from
     * @param $subject
     * @param $body
     */
    public function composer($to, $from, $subject, $body)
    {
        $this->mail = [
          'to' => $to,
          'from' => $from,
          'subject' => $subject,
          'body' => $body,
        ];
    }

    public function send()
    {
        if(empty($this->mail)) {
            throw new \InvalidArgumentException('Mail data is empty');
        }

        $this->mailProvider->send($this->mail);
    }
}