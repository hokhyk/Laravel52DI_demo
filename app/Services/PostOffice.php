<?php

namespace App\Services;

class PostOffice
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