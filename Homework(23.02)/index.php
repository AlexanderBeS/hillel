<?php

interface FigureInterface{}
interface PrimitiveInterface{}

class Box implements FigureInterface{}
class Triangle implements FigureInterface{}
class Circle implements FigureInterface{}
class Point implements PrimitiveInterface{}
class Line implements PrimitiveInterface{}

$data = [
    new Box(),
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