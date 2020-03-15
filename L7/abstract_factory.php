<?php

interface LoggerInterface
{
    public function log(string $message);
}

class FileLogger implements LoggerInterface
{
    public function log(string $message)
    {
       echo 'saved to file, message ' . $message;
    }
}

class CloudLogger implements LoggerInterface
{
    public function log(string $message)
    {
        echo 'saved to cloud, message ' . $message;
    }
}

abstract class AbstractLoggerFactory
{
    abstract public function createLogger() :LoggerInterface;
}

class FileLoggerFactory extends AbstractLoggerFactory
{
    public function createLogger() :LoggerInterface
    {
        return new FileLogger();
    }
}

class CloudLoggerFactory extends AbstractLoggerFactory
{
    public function createLogger() :LoggerInterface
    {
        return new CloudLogger();
    }
}

$env = getenv('MODE');

switch ($env) {
    case 'prod':
        $factory = new CloudLoggerFactory();
        break;
    case 'dev':
        $factory = new FileLoggerFactory();
        break;
}

$logger = $factory->createLogger();
$logger->log('message');