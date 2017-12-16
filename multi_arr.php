<?php
$big = [
    'small' => [
        'key' => 'value',
    ],
];
echo $big['small']['key'];
unset($big['small']['key']);
var_export($big);

$cars = [
    'volvo' => [
        'xc90', 'xc60', 'v60'
    ],
    'skoda' => [
        'felicia' => [
            'hatchback', 'kombi', 'pickup'
        ],
    ],
];
var_export(isset($cars['mercedes']));