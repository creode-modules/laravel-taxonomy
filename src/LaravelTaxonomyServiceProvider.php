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
            /* @phpstan-ignore-next-line */
            $this->string('name')->nullable();
            /* @phpstan-ignore-next-line */
            $this->string('slug')->nullable();
            /* @phpstan-ignore-next-line */
            $this->unsignedBigInteger('parent_id')->nullable();
        });
    }
}
