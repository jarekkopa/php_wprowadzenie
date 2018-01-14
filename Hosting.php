<?php

declare(strict_types = 1);

class Hosting extends AbstractProduct 
{
    public function order()
    {
        return 'Zamówienie na hosting złożone';
    }
}