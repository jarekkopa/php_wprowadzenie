<?php

declare (strict_types = 1);
/**
 * model faktury VAT
 */
class Invoice
{
    /**
     * Numer faktury Vat
     * 
     * @var string
     */
    public $id;

    /**
     * Data wystawienia
     * 
     * @var DateTime
     */
    public $date;

    /**
     * Klient dla którego wystawiamy fakturę
     * 
     * @var Customer
     */
    public $customer;
}