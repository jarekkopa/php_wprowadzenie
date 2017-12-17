<?php

$names = ['Zenon', 'Yeti', 'X-man'];

$callback = function(string $name): string {
        return "Hello, {$name}!";
};

$hellos = array_map($callback, $names);
var_export($hellos);