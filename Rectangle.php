<?php

declare(strict_types=1);

class Rectangle implements AreaCalculableInterface
{
    private $height;
    private $width;
    
    public function setHeight(int $height) //pamietać o ustawieniu dla setterów parametru wraz z typem 
    {
        $this->height = $height;
    }
    public function setWidth(int $width)//pamietać o ustawieniu dla setterów parametru wraz z typem 
    {
        $this->width = $width;
    }
    public function getHeight()//gettery nie potrzebują parametrów w nawiasie bo zmienna jest w getterze
    {
        return $this->height;
    }
    public function getWidth()//gettery nie potrzebują parametrów w nawiasie bo zmienna jest w getterze
    {
        return $this->width;
    }
}
