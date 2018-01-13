<?php
declare(strict_types=1);

class GentleCustomer extends Customer
{
    public function askForDiscount(): void
    {
        echo "Dzie dobry. Mógłbym prosić o zniżkę?";
    }
}