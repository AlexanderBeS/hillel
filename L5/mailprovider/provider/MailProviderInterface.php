<?php


namespace Application\Provider;


interface MailProviderInterface
{
    /**
     * send mail via provider
     *
     * @return bool
     */
    public function send(): bool;

}