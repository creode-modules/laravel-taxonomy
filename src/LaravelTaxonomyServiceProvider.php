<?php

namespace Creode\LaravelTaxonomy;

use Illuminate\Database\Schema\Blueprint;
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
            ->hasConfigFile();
    }

    public function boot()
    {
        parent::boot();

        /**
         * Provides new baseTermFields() function when creating a migration.
         */
        Blueprint::macro('baseTermFields', function () {
            $this->string('name')->nullable();
            $this->string('slug')->nullable();
            $this->unsignedBigInteger('parent_id')->nullable();
        });
    }
}
