<?php

namespace Creode\LaravelTaxonomy\Tests\Mocks;

use Creode\LaravelTaxonomy\TermServiceProvider;
use Creode\LaravelTaxonomy\Tests\Mocks\Models\MultipleTerm;
use Creode\LaravelTaxonomy\Tests\Mocks\Models\RelationMultiple;

class MultipleTermServiceProvider extends TermServiceProvider
{
    /**
     * Determine if the relationship is multiple.
     *
     * @var boolean
     */
    protected bool $multiple = true;

    /**
     * The class to use for the relationship.
     *
     * @var string
     */
    protected string $relationClass = RelationMultiple::class;

    /**
     * The term model class path to use.
     *
     * @var string
     */
    protected string $termClass = MultipleTerm::class;

    /**
     * Adds test migration tables.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
