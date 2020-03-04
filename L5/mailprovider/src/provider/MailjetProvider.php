<?php

namespace Application\Provider;
use Application\ConfigurableInterface;
use Application\ConfigurableTrait;

class MailjetProvider implements MailProviderInterface, ConfigurableInterface
{
    use ConfigurableTrait;
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