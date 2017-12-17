<?php
declare(strict_types=1);
/**
 * Funkcja sumująca
 * 
 * @param int $a liczba a
 * @param int $b liczba b
 */
function sum (int $a = 0, int $b = 0): int
{
    return $a + $b;
}
function diff (int $a = 0, int $b = 0): int
{
    return $a - $b;
}
function multi (int $a = 0, int $b = 0): int
{
    return $a * $b;
}
function div (int $a = 0, int $b = 0): float
{
    if ($b === 0){
        die("Nie dziel przez zero!");
    }
    return $a / $b;
}

echo sum(13, 5), PHP_EOL;
echo diff(56, 25), PHP_EOL;
echo multi(7, 8), PHP_EOL;
echo div(3, 5), PHP_EOL;