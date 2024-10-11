<?php

namespace Creode\LaravelTaxonomy\Database\Factories;

use Creode\LaravelTaxonomy\Models\Term;
use Illuminate\Database\Eloquent\Factories\Factory;

class TermFactory extends Factory
{
    protected $model = Term::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'parent_id' => null,
        ];
    }

    public function parent(?Term $parent = null)
    {
        return $this->state(function (array $attributes) use ($parent) {
            return [
                'parent_id' => $parent ?: Term::factory(),
            ];
        });
    }
}
