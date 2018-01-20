<?php

declare(strict_types=1);

require_once 'Rectangle.php';

class Square extends Rectangle
{
    public function setHeight(int $height) //pamietać o ustawieniu dla setterów parametru wraz z typem 
    {
        $this->height = $height;
        $this->width = $height;
    }

    public function setWidth(int $width) //pamietać o ustawieniu dla setterów parametru wraz z typem 
    {
        $this->height = $width;
        $this->width = $width;
    }
}
