<?php
declare(strict_types=1);

require_once 'Customers.php';
require_once 'ChaoticCustomer.php';

$customer = new Customer();
$customer->setName('Marian');
echo $customer->getDiscount();
echo $customer->getName();
echo $customer->askForDiscount();

$rudolf = new ChaoticCustomer();
$rudolf->setName('Rudolf');
echo $rudolf->getDiscount();
echo $rudolf->getName();
echo $rudolf->askForDiscount();