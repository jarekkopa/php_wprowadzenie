<?php

declare(strict_types=1);

require __DIR__ . '\vendor\autoload.php';

$dishwasher = new Jaro\Dishwasher();
echo $dishwasher->powerOn(), PHP_EOL;
echo $dishwasher->powerOff();

