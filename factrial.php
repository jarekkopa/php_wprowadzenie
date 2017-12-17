<?php
declare(strict_types=1);

function factorial(int $n): int
{
    //znak stop dla funkcji
    if ($n === 1){
        return 1;
    }
    //funkcja w funkcji
    return $n * factorial($n - 1);
}

echo factorial(5);