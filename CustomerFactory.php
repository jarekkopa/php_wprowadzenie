<?php

declare(strict_types=1);

class CustomerFactory
{
    //'gentle'
    //'chaotic'
    public static function chooseCustomer(string $customerType)
    {
        if ($customerType === 'gentle'){
            return new GentleCustomer();
    }
        return new ChaoticCustomer();
}
}
