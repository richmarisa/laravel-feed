<?php

namespace CUCustomApps\Feed;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use CUCustomApps\Feed\Commands\FeedCommand;

class FeedServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-feed')
            ->hasConfigFile()
            ->hasViews()
//            ->hasMigration('create_laravel-feed_table')
            ->hasCommand(FeedCommand::class);
    }
}
