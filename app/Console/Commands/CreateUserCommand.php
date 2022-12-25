<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new users';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = Str::random(8);
        $password = Str::random (12);
        User::create([
            'name' => $name,
            'email' => $name . '@gmail.com',
            'password' => $password,
        ]);
        $this->info('success created. Email:' . $name . '@gmail.com;  password: ' . $password);
        return Command::SUCCESS;
    }
}
