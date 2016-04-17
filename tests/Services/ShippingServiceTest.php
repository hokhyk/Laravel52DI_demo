<?php

use App\Services\BlackCat;
use App\Services\LogisticsInterface;
use App\Services\ShippingService;

class ShippingServiceTest extends TestCase
{
    /** @test */
    public function 黑貓單元測試()
    {
        /** arrange */
        $expected = 100;
        $weight = 1;

        $mock = Mockery::mock(LogisticsInterface::class);
        $mock->shouldReceive('calculateFee')
            ->once()
            ->withAnyArgs()
            ->andReturn($expected);

        App::instance(LogisticsInterface::class, $mock);

        /** act */
        $actual = App::call(ShippingService::class . '@calculateFee', [
            'weight' => $weight
        ]);

        /** assert */
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function 黑貓整合測試()
    {
        /** arrange */
        $expected = 110;
        $weight = 1;

        App::bind(LogisticsInterface::class, BlackCat::class);

        /** act */
        $actual = App::call(ShippingService::class . '@calculateFee', [
            'weight' => $weight
        ]);

        /** assert */
        $this->assertEquals($expected, $actual);
    }
}
