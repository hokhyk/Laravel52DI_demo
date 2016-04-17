<?php

namespace App\Services;

class ShippingService
{
    /**
     * @param LogisticsInterface $logistics
     * @param int $weight
     * @return int
     */
    public function calculateFee(LogisticsInterface $logistics, $weight)
    {
        return $logistics->calculateFee($weight);
    }
}