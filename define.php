<?php

#wyświetlanie błędów
error_reporting(E_ALL);
ini_set('dispaly_errors', true);

#treść zadania
const MAX_SLIDES_NUMBER = 99;
if(!defined('MAX_SLIDES_NUMBER')){
        define("MAX_SLIDES_NUMBER", 666);
}
echo "Maksymalna liczba slajdów: ", MAX_SLIDES_NUMBER, PHP_EOL;