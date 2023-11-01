<?php

namespace Creode\LaravelTaxonomy\Concerns;

trait Parentable
{
    protected function initializeParentable()
    {
        $this->fillable[] = 'parent_id';
    }

    /**
     * Creates a relationship to a parent version of itself.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    /**
     * Creates a relation to get all the children of an item.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id')->with('children');
    }
}
