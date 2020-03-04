<?php

namespace Application;

interface ConfigurableInterface
{
    public function parseIni(string $filename): void;

    //public function getConfig();
}