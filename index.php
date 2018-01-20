<?php

declare(strict_types=1);

require_once 'Rectangle.php';
require_once 'Square.php';

$rectangle = new Rectangle();
$rectangle->setWidth(10); //ustawiam z zewnątrz wartośc spoza klasy
$rectangle->setHeight(5);

var_export($rectangle);
var_export($rectangle->calculateArea());

$square = new Square();
$square->setHeight(5);

var_export($square);
var_export($square->calculateArea());