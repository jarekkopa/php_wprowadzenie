<?php

declare(strict_types = 1);

class Hosting extends AbstractProduct 
{
    public function order()
    {
        return 'Zamówienie na hosting złożone';
    }

    public function changeStatus(string $newStatus)
    {
        echo "Status zmieniony: $newStatus";
    }
}