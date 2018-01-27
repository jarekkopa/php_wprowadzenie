<?php
declare(strict_types=1);

/**
 * Skrypt wyświetlający liczby nieparzyste z przedziału 1 do 10.
 */

for ($i = 1; $i <= 10; ++$i) {
    if($i % 2 != 0) { 
        echo $i, PHP_EOL;
    }
}
