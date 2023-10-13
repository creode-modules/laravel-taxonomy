<?php

namespace Creode\LaravelTaxonomy;

use Creode\LaravelTaxonomy\Commands\LaravelTaxonomyCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelTaxonomyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-taxonomy')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-taxonomy_table')
            ->hasCommand(LaravelTaxonomyCommand::class);
    }
}
