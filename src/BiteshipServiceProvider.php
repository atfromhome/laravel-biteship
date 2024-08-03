<?php

declare(strict_types=1);

namespace Fromhome\Biteship;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

final class BiteshipServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-biteship')
            ->hasConfigFile()
            ->hasMigration('create_biteship_table');
    }
}
