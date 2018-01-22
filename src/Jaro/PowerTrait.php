<?php

declare(strict_types=1);

namespace Jaro;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

trait PowerTrait
{
    protected $power;

    public function powerOff()
    {
        $this->power = "off";

        // create a log channel
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('logs/logs.log', Logger::WARNING));
        // add records to the log
        $log->warning("Uwaga, wylaczasz urzadzenie power OFF" . PHP_EOL);

        return "Urządzenia wyłączono. Nadano status: " . $this->power;

    }
    public function powerOn()
    {
        $this->power = "on";

        // create a log channel
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('logs/logs.log', Logger::WARNING));
        // add records to the log
        $log->warning('Informacja o Ostrzeżeniach');
        $log->error('Informacja o Błędach');
        return "Urządzenia włączono. Nadano status: " . $this->power;
    }
}
