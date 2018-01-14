<?php
declare(strict_types = 1);

require_once 'AbstractProduct.php';
require_once 'Hosting.php';
require_once 'Domain.php';

$hosting = new Hosting();
$domain = new Domain();

echo $hosting;
echo $domain;