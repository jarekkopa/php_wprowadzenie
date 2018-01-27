<?php
declare(strict_types=1);

$array = range('a', 'z');
//var_export($array);

foreach($array as $letter){
    echo $letter, PHP_EOL;
}
