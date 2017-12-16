<?php
//ilość pmięci zajetej przez php
echo $allocatedMemory = memory_get_usage(), PHP_EOL;

echo $kb = $allocatedMemory / 1024, PHP_EOL;

if ($kb < 640){
    echo '640 KB wystarczy każdemu';
} else{
    echo 'Potrzebujesz' . (($allocatedMemory / 1024) / 1024) . 'MB';
}