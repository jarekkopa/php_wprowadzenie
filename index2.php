<?php

declare(strict_types=1);

namespace Jaro;

require __DIR__ . '/vendor/autoload.php';

$obj = new Logger();
$obj->saveToLogs('Rozpoczęcie pobierania');
$obj->saveToLogs('Zakonczenie pobierania');