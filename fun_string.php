<?php
$strings = ['Navicat', 'Category', 'Catharsis'];

foreach ($strings as $string){
    #wyświetla pozycję wystąpienia cat
    echo mb_strpos($string, 'cat');
    #zliczenie długości stringów
    echo mb_strlen($string);
    #zamina wsysztkich wystąpien cat na dog
    echo str_replace('cat', 'dog', $string);
}