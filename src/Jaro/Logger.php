<?php

declare(strict_types=1);

namespace Jaro;
/**
 * Klasa Logger zapisuje logi do pliku filmoteka.log.
 */
class Logger
{
    /**
     * Metoda saveToLogs zapisująca logi do pliku.
     * 
     * @param string $log Przechowuje treść logu przekazywanego do metody.
     */
    public function saveToLogs(string $log)
    {
        file_put_contents(Config::LOG_FILE, date('Y-m-j h:i:s') . " " . $log . PHP_EOL,FILE_APPEND);
    }
}