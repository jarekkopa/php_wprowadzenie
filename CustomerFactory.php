<?php

declare(strict_types=1);

class CustomerFactory
{
    //'gentle'
    //'chaotic'

    const GENTLE = 'gentle';
    const CHAOTIC = 'chaotic';

    public static function chooseCustomer(string $customerType, int $birthDate = 0): Customer
    {
        $age = $birthDate ? date('Y') - $birthDate : 0;

        if ($customerType === self::GENTLE)
        {
            return new GentleCustomer($age);
        }   
        
        if($customerType === self::CHAOTIC)
        {
            return new ChaoticCustomer($age);
        }   
        
        return new Customer($age);
    }
}
