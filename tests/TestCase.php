<?php

namespace Creode\LaravelTaxonomy\Tests;

use Creode\LaravelTaxonomy\LaravelTaxonomyServiceProvider;
use Creode\LaravelTaxonomy\Tests\Mocks\MultipleTermServiceProvider;
use Creode\LaravelTaxonomy\Tests\Mocks\SingleTermServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Creode\\LaravelTaxonomy\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );

        // TODO: Add migration path.
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelTaxonomyServiceProvider::class,
            SingleTermServiceProvider::class,
            MultipleTermServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-taxonomy_table.php.stub';
        $migration->up();
        */
    }
}
