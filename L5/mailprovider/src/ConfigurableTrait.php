<?php

namespace Application;

trait ConfigurableTrait
{

    /** @var string */
    private $serverAddress;
    /** @var int */
    private $port;
    /** @var string */
    private $username;
    /** @var string */
    private $password;
    /** @var bool */
    private $isTls;

    public function parseIni(string $filename, string $sectionName)
    {
        if(!file_exists($filename))
        {
            throw new \InvalidArgumentException('File does not exists');
        }

        $config = parse_ini_file($filename, true);
        $sectionConfig = $config[$sectionName];
        $this->serverAddress = $sectionConfig['server'];
        //i td port, username, password
    }

    public function getConfig()
    {
        $config =
    }

}