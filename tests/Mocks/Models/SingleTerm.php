<?php

namespace Creode\LaravelTaxonomy\Tests\Mocks\Models;

use Creode\LaravelTaxonomy\Models\Term;

class SingleTerm extends Term
{
    public static $machineName = 'singleTerm';

    /**
     * Defined Fillable Properties on model.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
    ];
}
