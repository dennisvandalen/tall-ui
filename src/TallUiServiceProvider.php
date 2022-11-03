<?php

namespace DennisVanDalen\TallUi;

use DennisVanDalen\TallUi\Commands\TallUiCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TallUiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('tall-ui')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_tall-ui_table')
            ->hasCommand(TallUiCommand::class);
    }
}
