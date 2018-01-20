<?php

declare(strict_types=1);

class Rectangle
{
    private $height;
    private $width;
    
    public function setHeight()
    {
        $this->height = $height;
    }
    public function setWidth()
    {
        $this->width = $width;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function getWidth()
    {
        return $this->width;
    }
    public function calculateArea(int $width, int $height)
    {
        return $this->height * $this->width;
    }
}