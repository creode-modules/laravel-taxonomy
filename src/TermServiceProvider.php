<?php

namespace Creode\LaravelTaxonomy;

use Illuminate\Support\ServiceProvider;

abstract class TermServiceProvider extends ServiceProvider {
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
    protected string $relationClass = '';

    /**
     * The id of the field to use for the relationship.
     *
     * @var string
     */
    protected string $relationFieldId = '';

    /**
     * The term model class path to use.
     *
     * @var string
     */
    protected string $termClass = '';

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
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
