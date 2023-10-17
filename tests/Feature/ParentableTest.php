<?php

it('allows you to create a parent relationship', function () {
    $parent = \Creode\LaravelTaxonomy\Tests\Mocks\Models\ParentableModel::create([
        'name' => 'Parent',
        'slug' => 'parent',
    ]);

    $child = \Creode\LaravelTaxonomy\Tests\Mocks\Models\ParentableModel::create([
        'name' => 'Child',
        'slug' => 'child',
        'parent_id' => $parent->id,
    ]);

    expect($child->parent->id)->toBe($parent->id);
});
