<?php

namespace App\Services;

use Exception;

class ShippingService
{
    /**
     * @param string $companyName
     * @param int $weight
     * @return int
     * @throws Exception
     */
    public function calculateFee($companyName, $weight)
    {
        if ($companyName == 'BlackCat') {
            $blackCat = new BlackCat();
            return $blackCat->calculateFee($weight);
        } elseif ($companyName == 'Hsinchu') {
            $hsinchu = new Hsinchu();
            return $hsinchu->calculateFee($weight);
        } elseif ($companyName == 'PostOffice') {
            $postOffice = new PostOffice();
            return $postOffice->calculateFee($weight);
        } else {
            throw new Exception('No company exception');
        }
    }
}