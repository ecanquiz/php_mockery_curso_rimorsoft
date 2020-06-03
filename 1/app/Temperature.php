<?php

namespace App;

use External\Service;

class Temperature
{
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function average()
    {
        $total = 0;

        for ($i = 0; $i < 3; $i++) {
            $total += $this->service->readTemp();
        }

        return $total / 3;
    }
}

