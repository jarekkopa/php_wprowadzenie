<?php
declare(strict_types=1);

require_once 'Customers.php';
require_once 'ChaoticCustomer.php';

$customer = new Customer();
$customer->setName('Marian');
echo $customer->getDiscount();
echo $customer->getName();
var_export($customer);