<?php
declare(strict_types=1);

require_once 'Customers.php';
require_once 'ChaoticCustomer.php';
require_once 'GentleCustomer.php';
require_once 'CustomerFactory.php';

$customer = new Customer();
$customer->setName('Marian');
echo $customer->getDiscount(), PHP_EOL;
echo $customer->getName(), PHP_EOL;
echo $customer->askForDiscount(), PHP_EOL;

$rudolf = CustomerFactory::chooseCustomer('chaotic');
$rudolf->setName('Rudolf');
echo $rudolf->getDiscount(), PHP_EOL;
echo $rudolf->getName(), PHP_EOL;
$rudolf->askForDiscount();

$customer2 = new GentleCustomer();
$customer2->askForDiscount();

Customer::getClassName();
GentleCustomer::getClassName();
ChaoticCustomer::getClassName();

$rudolf = CustomerFactory::chooseCustomer(CustomerFactory::GENTLE);