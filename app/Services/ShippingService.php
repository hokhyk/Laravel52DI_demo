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
        switch ($companyName) {
            case 'BlackCat':
                $blackCat = new BlackCat();
                return $blackCat->calculateFee($weight);
            case 'Hsinchu':
                $hsinchu = new Hsinchu();
                return $hsinchu->calculateFee($weight);
            case 'PostOffice':
                $postOffice = new PostOffice();
                return $postOffice->calculateFee($weight);
            default:
                throw new Exception('No company exception');
        }
    }
}