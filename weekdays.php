<?php
$weekdays = [
    'pl' => [
        'monday' => 'poniedziałek',
        'tuesday'  => 'wtorek',
        'wednesday' => 'środa',
        'thusday' => 'czwartek',
        'friday' => 'piątek',
        'saturday' => 'sobota',
        'sunday' => 'niedziela',
    ],
    'de' => [
        'monday' => 'montag',
        'tuesday'  => 'dienstag',
        'wednesday' => 'mittwoch',
        'thusday' => 'donnerstag',
        'friday' => 'freitag',
        'saturday' => 'samstag',
        'sunday' => 'sontag',
    ],
];
$checkWeekday = 'friday';
echo isset($weekdays['pl'][$checkWeekday]) ? "Jest w jezyku polskim" : 'Nie ma w jezyku polskim', PHP_EOL;
echo isset($weekdays['de'][$checkWeekday]) ? "Jest w jezyku niemieckim" : 'Nie ma w jezyku niemieckim', PHP_EOL;
echo isset($weekdays['it'][$checkWeekday]) ? "Jest w jezyku włoskim" : 'Nie ma w jezyku włoskim', PHP_EOL;