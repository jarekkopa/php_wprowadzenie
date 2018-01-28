<?php

declare(strict_types=1);

namespace Jaro;

class Logger
{
    public function saveToLogs($log = 'test')
    {
        file_put_contents('logs/filmoteka.log', date('Y-m-j h:i:s') . " " . $log . PHP_EOL,FILE_APPEND);
    }
}
// $loog = new Logger();
// echo $loog->saveToLogs();