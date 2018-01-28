<?php

declare(strict_types=1);

namespace Jaro;
/**
 * Klasa Config zawiera konfigurację do projektu.
 */
class Config
{
    /**
     * Stała zawierająca link do zapisu pliku log w odpowiednim katalogu.
     * 
     * @var string
     */
    const LOG_FILE = 'logs/filmoteka.log';

    /**
     * Stała zawierająca link www z plakatami filmów
     * 
     * @var string
     */
    const POSTER_SRC = 'https://cytaty.eu/img/sda/posters/';

    /**
     * Stała zawierająca link www z ujęciami z filmów
     * 
     * @var string
     */
    const SHOTS_SRC = 'https://cytaty.eu/img/sda/shots/';

    /**
     * Stała zawierająca katalog do zapisu plakatów
     * 
     * @var string
     */
    const POSTER_DIR = 'img/';

    /**
     * Stała zawierająca katalog do zapisu ujęć
     * 
     * @var string
     */
    const SHOTS_DIR = 'img/';

    /**
     * Tablica z tutuałmi filmów
     * 
     * @param string $titles
     */
    public $titles = ['Piraci z Karaibow', 'Ring', 'Blade Runner 2049', 'Thor', 'Get Out', 'Star Wars Last Jedi', 'Okja', 'London', 'Tarzan', 'The Founder', 'Kapitan Ameryka Civil War', 'Spectre'];
    //tutuły filmów do użycia w logach i do zapisu zdjeć
}
