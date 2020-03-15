<?php


class FileLogger
{

}

class CloudLogger
{

}

class LoggerFactory
{
    public static function create(string $loggerType)
    {
        switch ($loggerType) {
            case CloudLogger::class:
                return new CloudLogger();
                break;
            case FileLogger::class:
               return new FileLogger();
                break;
        }
    }
}


$logger = new  LoggerFactory();
$createLogger = $logger->create(CloudLogger::class);
var_dump($createLogger);