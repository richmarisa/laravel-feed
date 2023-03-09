<?php

namespace CUCustomApps\Feed;

use CUCustomApps\Feed\Commands\FeedCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasViews('feed')
//            ->hasMigration('create_laravel-feed_table')
            ->hasCommand(FeedCommand::class);
    }
}
