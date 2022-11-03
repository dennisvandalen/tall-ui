<?php

namespace DennisVanDalen\TallUi\Commands;

use Illuminate\Console\Command;

class TallUiCommand extends Command
{
    public $signature = 'tall-ui';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
