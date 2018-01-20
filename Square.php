<?php

declare(strict_types=1);

require_once 'Rectangle.php';

class Square  implements AreaCalculableInterface
{
    public $lenght;

    public function setLenght(int $lenght) //pamietać o ustawieniu dla setterów parametru wraz z typem 
    {
        $this->lenght = $lenght;
    }

    public function getLenght()//gettery nie potrzebują parametrów w nawiasie bo zmienna jest w getterze
    {
        return $this->lenght;
    }
}
