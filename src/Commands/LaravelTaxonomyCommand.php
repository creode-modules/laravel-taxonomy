<?php

namespace Creode\LaravelTaxonomy\Commands;

use Illuminate\Console\Command;

class LaravelTaxonomyCommand extends Command
{
    public $signature = 'laravel-taxonomy';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
