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
        $logistics = LogisticsFactory::create($companyName);
        return $logistics->calculateFee($weight);
    }
}