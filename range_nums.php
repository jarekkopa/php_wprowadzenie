<?php
declare(strict_types=1);

/**
 *Funkcja range (liczby od 0 do 50) oraz pętla foreach
 */

$array = range(0, 50);
//var_export($array);

foreach($array as $element){
    echo $element, PHP_EOL;
}