<?php

namespace App\Services;

class Hsinchu implements LogisticsInterface
{
    /**
     * @param int $weight
     * @return int
     */
    public function calculateFee($weight)
    {
        return 80 + $weight * 15;
    }
}