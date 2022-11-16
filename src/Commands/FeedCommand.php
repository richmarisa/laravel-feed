<?php

namespace CUCustomApps\Feed\Commands;

use Illuminate\Console\Command;

class FeedCommand extends Command
{
    public $signature = 'laravel-feed';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
