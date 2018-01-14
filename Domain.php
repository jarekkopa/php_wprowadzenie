<?php

declare(strict_types = 1);

class Domain extends AbstractProduct 
{
    public function order()
    {
        return 'Zamówienie na domenę złożone';
    }
}