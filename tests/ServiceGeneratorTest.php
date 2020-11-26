<?php

namespace CapeAndBay\ServiceGenerator\Tests;

use CapeAndBay\ServiceGenerator\Facades\ServiceGenerator;
use CapeAndBay\ServiceGenerator\ServiceProvider;
use Orchestra\Testbench\TestCase;

class ServiceGeneratorTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'service-generator' => ServiceGenerator::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
