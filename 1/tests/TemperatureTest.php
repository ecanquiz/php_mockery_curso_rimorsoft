<?php

use \PHPUnit\Framework\TestCase;
use \App\Temperature;

class TemperatureTest extends TestCase
{

    public function testGetsAverageTemperatureFromThreeServiceReadings()
    {
        $service = Mockery::mock('External\Service');
        $service->shouldReceive('readTemp')
            ->times(3)
            ->andReturn(10, 12, 14);

        $temperature = new Temperature($service);

        $this->assertEquals(12, $temperature->average());
    }
}


