<?php

namespace Creode\LaravelTaxonomy\Tests\Mocks\Models;

use Creode\LaravelTaxonomy\Models\Term;

class MultipleTerm extends Term
{
    public static $machineName = 'multipleTerms';

    protected $fillable = [
        'name',
        'slug',
    ];
}
