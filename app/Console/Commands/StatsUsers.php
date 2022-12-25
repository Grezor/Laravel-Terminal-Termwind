<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use function Termwind\render;

class StatsUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stats:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'statistiques';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        render(view('termwind.stats'));
        return Command::SUCCESS;
    }
}
