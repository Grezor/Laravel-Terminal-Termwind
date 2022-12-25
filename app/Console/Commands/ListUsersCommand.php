<?php

namespace App\Console\Commands;

use view;
use App\Models\User;
use function Termwind\render;
use Illuminate\Console\Command;

class ListUsersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'list:alluser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        render(view('termwind.listuser', [
            'user' => User::all()
        ])->render());
        // return Command::SUCCESS;
    }
}
