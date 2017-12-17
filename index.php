<?php
declare(strict_types=1);
require_once 'Customers.php';

$customer = new Customer();
$customer->name = 'Marian';
var_export($customer);