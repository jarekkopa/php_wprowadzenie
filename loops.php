<?php
declare(strict_types=1);

/**
 *Skrypt wyświetlający zawartośc tabli przy użyciu różnych pętli.
 */

$months = ['styczen', 'luty', 'marzec', 'kwiecien', 'maj', 'czerwiec', 'lipiec', 'sierpien', 'wrzesien', 'pazdziernik', 'listopad', 'grudzien'];

//Pętla foreach

foreach($months as $month) {
    echo $month, PHP_EOL;
};

//Pętla for

for($i = 0; $i < count($months); ++$i) {
    echo $months[$i], PHP_EOL;
}

//Pętla while

$array_length = count($months);
$i = 0;

while ($i < $array_length){
    echo $months[$i], PHP_EOL;
    ++$i;
}
