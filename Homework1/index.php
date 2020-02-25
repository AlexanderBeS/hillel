<?php

interface FigureInterface{
    public function getSquare();
}
interface PrimitiveInterface{}


class Square implements FigureInterface
{
    public $sideSize;

    public function getSquare()
    {
        // TODO: Implement getSquare() method.
    }
}

class Triangle implements FigureInterface
{
    public $sideSize1;
    public $sideSize2;
    public $sideSize3;

    public function getSquare()
    {
        // TODO: Implement getSquare() method.
    }
}

class Circle implements FigureInterface
{
    public $radius;

    public function getSquare()
    {
        // TODO: Implement getSquare() method.
    }
}

class Point implements PrimitiveInterface{}
class Line implements PrimitiveInterface{}

$data = [
    new Square(),
    new Triangle(),
    new Circle(),
    new Point(),
    new Line(),
];

$figures = [];
$primitives = [];

foreach ($data as $k=>$obj) {
    if ($obj instanceof FigureInterface)
    {
        array_push($figures, $obj);
    }

    if ($obj instanceof PrimitiveInterface)
    {
        array_push($primitives, $obj);
    }
}


print_r($figures);
print_r($primitives);



$obj = new ReflectionClass('Triangle');
print_r($obj->getName());
print_r($obj->getProperties());