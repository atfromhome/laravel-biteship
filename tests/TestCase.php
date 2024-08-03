<?php

declare(strict_types=1);

namespace Fromhome\Biteship\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Fromhome\Biteship\BiteshipServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            BiteshipServiceProvider::class,
        ];
    }
}
