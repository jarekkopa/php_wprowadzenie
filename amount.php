<?php
/**
 * Skrypt wyświetlający kwotę z przedziału 0-999 na wartość słowną
 */

$kwota = 10;

$jednosci = ['Zero', 'Jeden', 'Dwa', 'Trzy', 'Cztery', 'Pięć', 'Sześć', 'Siedem', 'Osiem', 'Dziewięć'];
$dziesiatki = ['dziesięć', 'dwadzieścia', 'trzydzieści', 'czterdzieści', 'pięćdziesiąt', 'sześćdziesiąt', 'siedemdziesiąt', 'osiemdziesiąt', 'dziewięćdziesiąt'];
$zlotychJednosci = ['złotych', 'złoty', 'złote', 'złote', 'złote', 'złotych', 'złotych', 'złotych', 'złotych', 'złotych'];

if ($kwota < 10) {
    echo $jednosci[$kwota] . ' ' . $zlotychJednosci[$kwota];
}

if ($kwota  = 10){
    var_export($kwota);
    $kwotaStr = (string)$kwota;
    $dziesiatki = $kwotaStr{0};
    $ileJednosci = $kwotaStr{1};
    echo $dziesiatki[$ileDziesiatki - 2], ' ' ;
}