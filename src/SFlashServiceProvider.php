<?php

namespace Eru\SFlash;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Eru\SFlash\Commands\SFlashCommand;

class SFlashServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('sflash')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_sflash_table')
            ->hasCommand(SFlashCommand::class);
    }
}
