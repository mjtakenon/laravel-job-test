<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'test command';

    /**
     * Execute the console command.
     *
     * @return int
     * @throws \Throwable
     */
    public function handle(): int
    {
        \Log::info('start ' . $this->signature);
        $now = hrtime(true);

        \Log::info('end ' . $this->signature . ' ' . hrtime(true) - $now . 'ns');
        return Command::SUCCESS;
    }
}
