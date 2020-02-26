<?php

class Registry
{
    private $storage;

    public function __get($name)
    {
        if (!isset($name)) return null;
        return $this->storage[$this->toUpperCase($name)];
    }

    public function __set($name, $value)
    {
        $this->storage[$this->toUpperCase($name)] = $value;
    }

    public function __isset($name)
    {

    }

    private function toUpperCase($name)
    {
        return strtoupper($name);
    }
}


//конструктор форм
//input где name - имя свойства, а value - значение