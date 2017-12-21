<?php
declare(strict_types=1);

/**
 * Skrypt wyświetlający liczby z przedziału 1 do 10 z opisem - parzysta lub nieparzysta.
 */

for ($i = 1; $i <= 10; ++$i) {
    if($i % 2 != 0) { 
        echo "$i jest liczbą nieparzystą", PHP_EOL;
    } else {
        echo "$i jest liczbą parzystą", PHP_EOL;
    }
}