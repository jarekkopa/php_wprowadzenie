<?php
declare(strict_types=1);
//nazwa klasy z wielkiej
class Customer 
{
    private $name;
    public function getDiscount(): int
    {
        return 20;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}