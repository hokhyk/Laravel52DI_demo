<?php

namespace App\Services;

class Hsinchu
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