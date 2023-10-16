<?php

namespace Creode\LaravelTaxonomy\Tests\Mocks;

use Creode\LaravelTaxonomy\TermServiceProvider;
use Creode\LaravelTaxonomy\Tests\Mocks\Models\RelationSingle;
use Creode\LaravelTaxonomy\Tests\Mocks\Models\SingleTerm;

class SingleTermServiceProvider extends TermServiceProvider
{
    /**
     * Determine if the relationship is multiple.
     *
     * @var boolean
     */
    protected bool $multiple = false;

    /**
     * The class to use for the relationship.
     *
     * @var string
     */
    protected string $relationClass = RelationSingle::class;

    /**
     * The term model class path to use.
     *
     * @var string
     */
    protected string $termClass = SingleTerm::class;

    protected string $relationFieldId = 'single_term_id';

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
