<?php

namespace App\Services;

use Exception;

class LogisticsFactory
{
    /**
     * @param string $companyName
     * @return LogisticsInterface
     * @throws Exception
     */
    public static function create(string $companyName) : LogisticsInterface
    {
        switch ($companyName) {
            case 'BlackCat':
                return new BlackCat();
            case 'Hsinchu':
                return new Hsinchu();
            case 'PostOffice':
                return new PostOffice();
            default:
                throw new Exception('No company exception');
        }
    }
}