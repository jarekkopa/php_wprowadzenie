<?php
/**
 * Skrypt wyświetlający kwotę z przedziału 0-999 na wartość słowną
 */

$kwota = 20;

$jednosci = ['Zero', 'Jeden', 'Dwa', 'Trzy', 'Cztery', 'Pięć', 'Sześć', 'Siedem', 'Osiem', 'Dziewięć'];
$zlotychJednosci = ['złotych', 'złoty', 'złote', 'złote', 'złote', 'złotych', 'złotych', 'złotych', 'złotych', 'złotych'];

echo $jednosci[$kwota] . ' ' . $zlotychJednosci[$kwota];