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

$customerStatus = new GentleCustomer();
echo $customerStatus->status, PHP_EOL;

$customerAge = new Customer(3);
$customerAgeGengle = new GentleCustomer(4);
$customerAgeChaotic = new ChaoticCustomer(5);
echo 'Wiek: '. $customerAge->age, PHP_EOL;
echo 'Wiek: '. $customerAgeGengle->age, PHP_EOL;
echo 'Wiek: '. $customerAgeChaotic->age, PHP_EOL;
var_export($customerAge);
var_export($customerAgeGengle);
var_export($customerAgeChaotic);