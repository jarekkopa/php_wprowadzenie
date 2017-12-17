<?php
declare(strict_types=1);//zawsze tego używamy na początku pliku
/**
 * Wyświetlanie z formatowaniem podanego nazwiska
 * 
 * @param string $familyName nazwisko
 * 
 * @param int #birthDate rok urodzenia
 */
function printFamilyName(string $familyName, int $birthDate = 2000): void
{
    echo "Name: $familyName. Born: $birthDate", PHP_EOL;
}

printFamilyName('Nowak', 1987);
printFamilyName('Kowalski');