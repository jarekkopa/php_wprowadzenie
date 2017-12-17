<?php
declare(strict_types=1);
//nazwa klasy z wielkiej
class Customer 
{
    public $name;
    public function getDiscount(): int
    {
        return 20;
    }
}