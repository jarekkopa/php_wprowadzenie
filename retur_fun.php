<?php
declare(strict_types=1);

function sum (int $a = 0, int $b = 0): int
{
    return $a + $b;
}

echo sum(5, 3);