<?php

declare (strict_types = 1);

class ChaoticCustomer extends Customer 
{
    public function getDiscount(): int
    {
        return 5;
    }
    //void stosujemy gdy funckja nic nie zwraca, nie ma return
    public function askForDiscount(): void
    {
        echo "Gdzie moja zniżka?! Dawaj mi znikę!";
    }
}