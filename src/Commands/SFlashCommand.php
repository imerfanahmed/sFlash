<?php

namespace Eru\SFlash\Commands;

use Illuminate\Console\Command;

class SFlashCommand extends Command
{
    public $signature = 'sflash';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
