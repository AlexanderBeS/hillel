<?php

class Builder
{
    private $manufacturer;

    public static function create(): Builder
    {
        return new self();
    }

    public function setModel(string $manufacturer): self
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function getModel(): string
    {
        return $this->manufacturer;
    }

}

/*
$builder = new Builder();
$builder->setModel('bmw');
$builder->getModel();
*/

//если мы хотим, чтоб нельзя было создать объект - делаем private __construct() и статический метод.
//может обращаться к статическим методам

$builder1 = Builder::create()->setModel('bmw')->getModel();
echo $builder1;