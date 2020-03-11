<?php


class Singleton
{
    private static $instance;
    private $storedText;

    private function __construct(){}
    private function __clone(){}

    public static function getInstance(): Singleton
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    public function toUpper(string $text): string
    {
        $this->storedText = $text;
        return strtoupper($text);
    }

    public function getStoredText(): ?string
    {
        return $this->storedText;
    }
}

$singleton = Singleton::getInstance();