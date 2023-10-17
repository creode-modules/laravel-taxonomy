<?php

namespace Creode\LaravelTaxonomy\Tests\Mocks\Models;

use Creode\LaravelTaxonomy\Traits\Parentable;

class ParentableModel extends \Creode\LaravelTaxonomy\Models\Term
{
    use Parentable;
}
