<?php

declare(strict_types=1);

require_once 'Rectangle.php';
require_once 'Square.php';

$rectangle = new Rectangle();
$rectangle->setWidth(3); //ustawiam z zewnątrz wartośc spoza klasy
$rectangle->setHeight(2);

var_export($rectangle);
var_export($rectangle->calculateArea());

$square = new Square();
$square->setHeight(5);

var_export($square);
var_export($square->calculateArea());

function getArea(Rectangle $rectangle): int
{
$rectangle->setHeight(2);
$rectangle->setWidth(3);

return $rectangle->calculateArea();
}

echo getArea($square);

function getArea(Square $square): int
{
$square->setHeight(2);

return $square->calculateArea();
}

echo getArea($square);