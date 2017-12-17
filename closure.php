<?php
// funckja typu closure - umożliwi nam dodanie do funkcji anonimowej zewnętrznych zmiennych, niezdefiniowanych w ciele funckji
$names = ['Zenon', 'Yeti', 'X-man'];
$greeting = 'Hi';
$hellos = array_map(
    function(string $name) use ($greeting): string { // dodanie use ($zmienna_zewnętrzna) - pozwala mi jej użyć wewnątrz funkcji
        return "{$greeting}, {$name}!";
}, $names
);
var_export($hellos);