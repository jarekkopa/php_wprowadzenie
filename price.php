<?php
$kwota = 38;

$jednosci = ['zero', 'jeden', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć', 'siedem', 'osiem', 'dziewięć'];
//$nascie = ['dziesięć', 'jedenaście', 'dwanaście', 'trzynaście', 'czternaście', 'piętnaście', 'szesnaście', 'siedemnaście', 'osiemnaście', 'dziewiętnaście'];
$zlotychKJednosci = ['zlotych', 'zloty', 'złote', 'złote', 'złote', 'zlotych', 'zlotych', 'zlotych', 'zlotych', 'zlotych'];

if ($kwota  >= 20){
    $kwotaStr = (string)$kwota;
    $ileDziesiatki = $kwotaStr{0};
    $ileJednosci = $kwotaStr{1};
    $dziesiat = ['dziesięć', 'dwadzieścia', 'trzydzieści', 'czterdzieści', 'pięćdziesiąt', 'sześćdziesiąt', 'siedemdziesiąt', 'osiemdziesiąt', 'dziewięćdziesiąt'];
    echo $dziesiat[$ileDziesiatki - 2], ' ' ;
}
echo $jednosci[$kwota] . ' ' . $zlotychKJednosci[$kwota];
