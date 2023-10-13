<?php

namespace Creode\LaravelTaxonomy\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Creode\LaravelTaxonomy\LaravelTaxonomy
 */
class LaravelTaxonomy extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Creode\LaravelTaxonomy\LaravelTaxonomy::class;
    }
}
