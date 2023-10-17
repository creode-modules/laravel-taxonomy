<?php

namespace Creode\LaravelTaxonomy\Models;

use Illuminate\Database\Eloquent\Model;

abstract class Term extends Model
{
    /**
     * Machine name of the specific term to use.
     *
     * @var string
     */
    public static $machineName = '';
}
