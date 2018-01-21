<?php

declare(strict_types=1);

trait PowerTrait
{
        protected $power;
    
        public function powerOff()
        {
            $this->power = "off";
            return "Urządzenia wyłączono. Nadano status: " . $this->power;
        }
        public function powerOn()
        {
            $this->power = "on";
            return "Urządzenia włączono. Nadano status: " . $this->power;
        }
}