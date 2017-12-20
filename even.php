<?php
declare(strict_types=1);

/**
 * Skrypt wyświetlający liczby parzyste z przedziału 1 do 10.
 */

for ($i = 1; $i <= 10; ++$i) {
    if($i % 2 === 0) { 
        #pamietać o operatorze porównania(== lub ===) - nie używać operatora przypisania (=)
        echo $i, PHP_EOL;
    }
}
