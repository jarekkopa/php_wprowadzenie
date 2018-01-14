<?php

declare(strict_types = 1);

class Domain extends AbstractProduct 
{
    public function order()
    {
        return 'Zamówienie na domenę złożone';
    }

    public function changeStatus(string $newStatus)
    {
        echo "Nie można zmienić statusu domeny";
    }
}