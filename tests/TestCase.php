<?php

declare(strict_types=1);

namespace Fromhome\Biteship\Tests;

use Fromhome\Biteship\BiteshipServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            BiteshipServiceProvider::class,
        ];
    }
}
