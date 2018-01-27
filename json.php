<?php
declare(strict_types=1);

/**
 * Wyświetlanie tablic w formacie JSON.
 */

$array1 = range(0, 50);
$array2 = range('a', 'z');

echo json_encode($array1), PHP_EOL;
echo json_encode($array2);
