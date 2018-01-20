<?php

declare(strict_types=1);

require_once 'Rectangle.php';

class Square extends Rectangle
{
    public function setHeight(int $height) //pamietać o ustawieniu dla setterów parametru wraz z typem 
    {
        $this->height = $height;
    }
    public function calculateArea()
    {
        return $this->height * $this->height;
    }
}
