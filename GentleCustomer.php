<?php
declare(strict_types=1);

class GentleCustomer extends Customer implements CustomerInterface
{
    /**
     * Konstruktor ustawia status Klienta na premium
     * __construct - metoda wywoływana podczas tworzenia 
     */
    public function __construct($age = 0)
    {
        $this->status = 'premium';
        parent::__construct($age);
    }

    public function askForDiscount(): void
    {
        echo "Dzie dobry. Mógłbym prosić o zniżkę?";
    }
}