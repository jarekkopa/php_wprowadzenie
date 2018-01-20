<?php

declare(strict_types=1);

require_once 'AreaCalculableInterface.php';
require_once 'Rectangle.php';
require_once 'Square.php';

$rectangle = new Rectangle();
$rectangle->setWidth(3); //ustawiam z zewnątrz wartośc spoza klasy
$rectangle->setHeight(2);
var_export($rectangle);
echo $rectangle->calcArea(), PHP_EOL;

$square = new Square();
$square->setLenght(3); //ustawiam z zewnątrz wartośc spoza klasy
var_export($square);
echo $square->calcArea();