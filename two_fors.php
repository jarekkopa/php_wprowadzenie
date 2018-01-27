<?php
declare(strict_types=1);

/**
 * Tabliczka mnożenia
 */

 for($i = 2; $i <=5; ++$i){
    for($j = 1; $j <=9; ++$j){
        $wynik = $i * $j;
        echo "$i * $j = $wynik", PHP_EOL;
    }
 }
 