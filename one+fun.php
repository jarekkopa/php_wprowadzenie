<?php
declare(strict_types=1);//zawsze tego używamy na początku pliku
/**
 * Wyświetlanie z formatowaniem podanego nazwiska
 * 
 * @param string $familyName nazwisko
 */
function printFamilyName(string $familyName): void
{
    echo "Name: $familyName", PHP_EOL;
}

printFamilyName('Nowak');
printFamilyName('Kowalski');