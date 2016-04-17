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

        $target = App::make(ShippingService::class);

        /** act */
        $actual = $target->calculateFee($weight);

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

        $target = App::make(ShippingService::class);

        /** act */
        $actual = $target->calculateFee($weight);

        /** assert */
        $this->assertEquals($expected, $actual);
    }
}
