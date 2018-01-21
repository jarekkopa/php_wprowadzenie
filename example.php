<?php

declare(strict_types=1);

require_once 'PowerTrait.php';
require_once 'AbstractAgdDevice.php';
require_once 'AbstractCar.php';
require_once 'Dishwasher.php';
require_once 'Fridge.php';
require_once 'ButtonCar.php';
require_once 'KeyCar.php';

$dishwasher = new Jaro\Dishwasher();
echo $dishwasher->powerOn(), PHP_EOL;
echo $dishwasher->powerOff();