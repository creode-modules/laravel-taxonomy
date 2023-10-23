<?php

it('allows you to create an instance of a taxonomy term', function () {
    $term = \Creode\LaravelTaxonomy\Tests\Mocks\Models\SingleTerm::create([
        'name' => 'Single Term',
        'slug' => 'single_term',
    ]);

    expect($term->name)->toBe('Single Term');
    expect($term->slug)->toBe('single_term');
});
