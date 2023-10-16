<?php

it('allows you to link a multiple terms to a relation', function () {
    $relation = \Creode\LaravelTaxonomy\Tests\Mocks\Models\RelationMultiple::create();

    $records = [
        [
            'name' => 'Term 1',
            'slug' => 'term1',
        ],
        [
            'name' => 'Term 2',
            'slug' => 'term2',
        ]
    ];

    $relation->multipleTerms()->createMany(
        $records
    );
    $relation->save();

    foreach ($relation->multipleTerms as $key => $term) {
        expect($term)->name->toBe($records[$key]['name']);
        expect($term)->slug->toBe($records[$key]['slug']);
    }
});
