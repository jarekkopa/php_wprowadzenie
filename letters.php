<?php

/**
 * Skrypt zawiera kilka ćwiczeniowych funkcji operujących na stringach.
 *
 * Przykład użycia:
 * 1. Zdefiniuj zmienną $stringToTest na ciąg znaków, który chcesz przetestować.
 * 2. Wywołuj kolejne funkcje zgodnie z ich dokumentacją.
 * 3. Uruchom skrypt w konsoli: php -f letters.php
 */

declare(strict_types=1);

$stringToTest = 'rabbit';
removeLastLetter($stringToTest);
appendLetters($stringToTest, 's');
insertLetters($stringToTest, 'my');
removeFirstLetter($stringToTest);
reverseText($stringToTest);

/**
 * Dodanie do tekstu na końcu ciągu znaków.
 *
 * @param string $text Tekst, do którego dodajemy ciąg znaków.
 * @param string $letters Ciąg znaków do dodania.
 *
 * @return string Tekst z dodanymi literami.
 */
function appendLetters(string $text, string $letters): string
{
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL;
    $text .= $letters;
    echo "After ", __FUNCTION__, ": ", $text, PHP_EOL;

    return $text;
}

/**
 * Usunięcie ostatniej litery z podanego ciągu znaków.
 *
 * @param string $text Tekst, z którego usuniemy ostatnią literę.
 *
 * @return string Tekst bez ostatniej litery.
 */
function removeLastLetter(string $text): string
{
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL;
    $text = substr($text, 0, strlen($text) - 1);
    echo "After ", __FUNCTION__, ": ", $text, PHP_EOL;

    return $text;
}

/**
 * Dodanie do tekstu na początku ciągu znaków.
 *
 * @param string $text Tekst, do którego dodajemy ciąg znaków.
 * @param string $letters Ciąg znaków do dodania.
 *
 * @return string Tekst z dodanymi literami.
 */
function insertLetters(string $text, string $letters): string
{
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL;
    $text = $letters . $text;
    echo "After ", __FUNCTION__, ": ", $text, PHP_EOL;

    return $text;
}

/**
 * Usunięcie pierwszej litery z podanego ciągu znaków.
 *
 * @param string $text Tekst, z którego usuniemy pierwszą literę.
 *
 * @return string Tekst bez pierwszej litery.
 */
function removeFirstLetter(string $text): string
{
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL;
    $text = substr($text, 1, strlen($text) - 1);
    echo "After ", __FUNCTION__, ": ", $text, PHP_EOL;

    return $text;
}

/**
 * Funkcja odwracająca kolejność znaków w ciągu.
 *
 * @param string $text Tekst, w którym odwracamy kolejność.
 *
 * @return string Tekst po odwróceniu kolejności.
 */
function reverseText(string $text): string
{
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL;
    $text = strrev($text);
    echo "After ", __FUNCTION__, ": ", $text, PHP_EOL;

    return $text;
}