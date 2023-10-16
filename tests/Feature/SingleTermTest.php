<?php

it('allows you to link a single term to a relation', function () {
    $relation = \Creode\LaravelTaxonomy\Tests\Mocks\Models\RelationSingle::make();

    $name = 'Single Term';
    $slug = 'single_term';

    $relation->singleTerm()->associate(Creode\LaravelTaxonomy\Tests\Mocks\Models\SingleTerm::create([
        'name' => $name,
        'slug' => $slug,
    ]));

    $relation->save();

    expect($relation->singleTerm->name)->toBe($name);
    expect($relation->singleTerm->slug)->toBe($slug);
});
