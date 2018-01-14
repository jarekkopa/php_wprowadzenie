<?php

declare (strict_types = 1);

class ChaoticCustomer extends Customer implements CustomerInterface
{
    public function getDiscount(): int
    {
        return 5;
    }
    //void stosujemy gdy funckja nic nie zwraca, nie ma return
    public function askForDiscount(): void
    {
        echo "Tutaj " . $this->name . ". Gdzie moja zniżka?! Dawaj mi znikę!";
    }
}