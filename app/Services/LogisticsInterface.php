<?php

namespace App\Services;

interface LogisticsInterface
{
    /**
     * @param int $weight
     * @return int
     */
    public function calculateFee($weight);
}