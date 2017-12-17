<?php
$countries = ['Russia', 'Italy', 'Egypt', 'Norway'];

$serializedCountries = serialize($countries);
echo $serializedCountries;