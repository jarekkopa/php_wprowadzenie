<?php
declare(strict_types=1);
//nazwa klasy z wielkiej
class Customer
{
    //protected $name;
    public $age;
    /**
     * Status danego Klienta (może być basic lu premium)
     * 
     * @var string
     */
    public $status = 'basic';

    public function __construct(int $age = 0)
    {
        $this->age = $age;
    }
    
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
        echo "Dzie dobry, nazywam sie " . $this->name . ". Mógłbym prosić o zniżkę?";
    }

    public static function getClassName(): void
    {
        echo ' Jestem klasą ', get_called_class(), PHP_EOL;
    }

    public function askForInvoice(int $invoiceId): Invoice
    {
        $invoice = new Invoice();
        $invoice->id = $invoiceId;
        //$invoice->setCustomer($this);
        return $invoice;
    }

    /**
     * Imię klienta
     * 
     * @var string
     */
    public $name;

    /**
     * Nazwisko klienita
     * 
     * @var string
     */
    public $lastName;

    /**
     * Numer NIP
     * 
     * @var string
     */
    public $nip;
}