<?php
$marks = [
    'Alicja' => [
        'fizyka' => 4,
        'chemia' => 5,
        'biliogia' => 6,
    ],
    'Bobik' => [
        'fizyka' => 2,
        'chemia' => 3,
        'biliogia' => 3,
    ],
    'Jarek' => [
        'fizyka' => 5,
        'chemia' => 4,
        'biliogia' => 5,
    ],
];

foreach($marks as $name => $oceny){
    foreach ($oceny as $przedmiot => $ocena) {;
        echo "Uczen {$name} z przemiotu {$przedmiot} otrzymał ocenę {$ocena}", PHP_EOL;
    }
}
