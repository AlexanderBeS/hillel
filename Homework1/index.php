<?php

interface FigureInterface{}
interface PrimitiveInterface{}
interface Area{
    public function getArea();
}

class Square implements FigureInterface, Area
{
    public $sideSize;
    public function getArea()
    {
        // TODO: Implement getArea() method.
    }
}

class Triangle implements FigureInterface, Area
{
    public $sideSize1;
    public $sideSize2;
    public $sideSize3;

    public function getArea()
    {
        // TODO: Implement getArea() method.
    }
}

class Circle implements FigureInterface, Area
{
    public $radius;
    //M_PI

    public function getArea()
    {
        // TODO: Implement getArea() method.
    }
}

class Point implements PrimitiveInterface{}
class Line implements PrimitiveInterface{}

$data = [
    new Square(),
    new Triangle(),
    new Circle(),
    new Point(),
    new Line,
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