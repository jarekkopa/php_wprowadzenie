<?php
declare(strict_types=1);

/**
 * Skrytp, który przy użyciu tablicy $numbers wyświetla 10 liczb w kolejności od 1 do 10.
 */

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numbers as $number) {
    echo $number, PHP_EOL;
}
