<?php

namespace Creode\LaravelTaxonomy\Tests\Mocks\Models;

use Creode\LaravelTaxonomy\Concerns\Parentable;

class ParentableModel extends \Creode\LaravelTaxonomy\Models\Term
{
    use Parentable;
}
