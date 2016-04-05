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
                $logistics = new BlackCat();
                return $logistics->calculateFee($weight);
            case 'Hsinchu':
                $logistics = new Hsinchu();
                return $logistics->calculateFee($weight);
            case 'PostOffice':
                $logistics = new PostOffice();
                return $logistics->calculateFee($weight);
            default:
                throw new Exception('No company exception');
        }
    }
}