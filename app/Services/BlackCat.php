<?php

namespace App\Services;

class BlackCat implements LogisticsInterface
{
    /**
     * @param int $weight
     * @return int
     */
    public function calculateFee($weight)
    {
        return 100 + $weight * 10;
    }
}