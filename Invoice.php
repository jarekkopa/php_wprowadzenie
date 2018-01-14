<?php

declare (strict_types = 1);

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
     * @var string
     */
    public $date;

    /**
     * Dane nabywcy
     * 
     * @var Customer
     */
    public $customer;
}