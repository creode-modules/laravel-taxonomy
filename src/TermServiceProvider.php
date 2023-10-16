<?php

namespace Creode\LaravelTaxonomy;

use Illuminate\Support\ServiceProvider;

abstract class TermServiceProvider extends ServiceProvider
{
    /**
     * Determine if the relationship is multiple.
     */
    protected bool $multiple = false;

    /**
     * The class to use for the relationship.
     */
    protected string $relationClass = '';

    /**
     * The id of the field to use for the relationship.
     */
    protected string $relationFieldId = '';

    /**
     * The term model class path to use.
     */
    protected string $termClass = '';

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        parent::boot();

        $this->relationClass::resolveRelationUsing(
            $this->termClass::$machineName,
            function ($relationModel) {
                if ($this->multiple) {
                    return $relationModel->belongsToMany($this->termClass);
                }

                return $relationModel->belongsTo($this->termClass, $this->relationFieldId);
            }
        );
    }
}
