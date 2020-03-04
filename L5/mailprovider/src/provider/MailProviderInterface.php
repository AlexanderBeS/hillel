<?php

namespace Application\Provider;

interface MailProviderInterface
{
    /**
     * Parse ini configuration
     *
     * @return bool
     */
    public function send(array $mailData): bool;

}