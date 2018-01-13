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
    //void stosujemy gdy funckja nic nie zwraca, nie ma return
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function askForDiscount(): void
    {
        echo "Mógłbym prosić o zniżkę?";
    }
}