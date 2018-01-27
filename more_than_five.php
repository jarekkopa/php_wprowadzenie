<?php
declare(strict_types=1);

/**
 * Skrypt wyświetlający liczby z przedziału 1 do 10 z opisem - parzysta lub nieparzysta.
 * Skrypt pomija liczby mniejsze niż 5.
 */


for ($i = 1; $i <= 10; ++$i) {
    if($i < 5) { 
        continue;
        //continue - przerywa aktualny cykl pętli i powoduje rozpoczęcie następnego
    }
    elseif ($i % 2 != 0) {
        echo "$i jest liczbą nieparzystą", PHP_EOL;
    }
    else {
        echo "$i jest liczbą parzystą", PHP_EOL;
    }
}