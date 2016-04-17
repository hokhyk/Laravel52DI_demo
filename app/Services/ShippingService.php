<?php

namespace App\Services;

class ShippingService
{
    /** @var LogisticsInterface */
    private $logistics;

    /**
     * ShippingService constructor.
     * @param LogisticsInterface $logistics
     */
    public function __construct(LogisticsInterface $logistics)
    {
        $this->logistics = $logistics;
    }

    /**
     * @param int $weight
     * @return int
     */
    public function calculateFee($weight)
    {
        return $this->logistics->calculateFee($weight);
    }
}