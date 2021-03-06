<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SeedUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seed:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'user created via database seeder';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //https://stackoverflow.com/questions/56669746/how-to-run-command-in-laravel-kernel-after-another-successful-command
        \Log::info("Cron is working fine!");
        $this->call('db:seed');
        $this->info('user created successfully');

    }
}
