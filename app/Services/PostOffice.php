<?php

namespace App\Services;

class PostOffice implements LogisticsInterface
{
    /**
     * @param int $weight
     * @return int
     */
    public function calculateFee($weight)
    {
        return 70 + $weight * 20;
    }
}