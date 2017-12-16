<?php
$big = [
    'small' => [
        'key' => 'value',
    ],
];
var_export($big);
$big['smal']['kay'] = 'new_value';
echo $big['small']['key'];