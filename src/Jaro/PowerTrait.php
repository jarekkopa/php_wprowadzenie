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

        public function generate()
        {
                    // create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
        }

        return "Urządzenia wyłączono. Nadano status: " . $this->power;
    }
    
    public function powerOn()
    {
        $this->power = "on";
        return "Urządzenia włączono. Nadano status: " . $this->power;
    }
}
