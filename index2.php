<?php
declare(strict_types = 1);

require_once 'AbstractProduct.php';
require_once 'Hosting.php';
require_once 'Domain.php';

$objectHosting = new Hosting();
echo $objectHosting->order(), PHP_EOL;
$objectDomain = new Domain();
echo $objectDomain->order(), PHP_EOL;
var_export($objectHosting);
var_export($objectDomain);