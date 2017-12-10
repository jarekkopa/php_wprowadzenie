<?php
$firstName = 'Jarek';
$secondName = &$firstName;
$secondName = 'Julian';
echo "My first name is {$firstName}.", PHP_EOL;
echo "My second name is {$secondName}.", PHP_EOL;
