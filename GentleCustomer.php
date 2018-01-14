<?php
declare(strict_types=1);

class GentleCustomer extends Customer
{
    /**
     * Konstruktor ustawia status Klienta na premium
     * __construct - metoda wywoływana podczas tworzenia 
     */
    public function __construct()
    {
        $this->status = 'premium';
    }

    public function askForDiscount(): void
    {
        echo "Dzie dobry. Mógłbym prosić o zniżkę?";
    }
}