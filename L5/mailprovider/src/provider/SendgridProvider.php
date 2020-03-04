<?php

namespace Application\Provider;
use Application\ConfigurableInterface;
use Application\ConfigurableTrait;

class SendgridProvider implements MailProviderInterface, ConfigurableInterface
{
    use ConfigurableTrait;

    public function __construct(string $filename)
    {
        $this->parseIni($filename);
    }

    /**
     * send mail via provider
     *
     * @return bool
     */
    public function send(array $mailData): bool
    {
        // TODO: Implement send() method.
    }
}