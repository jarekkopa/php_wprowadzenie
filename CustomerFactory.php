<?php

declare(strict_types=1);

class CustomerFactory
{
    //'gentle'
    //'chaotic'

    const GENTLE = 'gentle';
    const CHAOTIC = 'chaotic';

    public static function chooseCustomer(string $customerType)
    {
        if ($customerType === self::GENTLE)
        {
            return new GentleCustomer();
        }   
        
        if($customerType === self::CHAOTIC)
        {
            return new ChaoticCustomer();
        }   
        
        return new Customer();
    }
}
