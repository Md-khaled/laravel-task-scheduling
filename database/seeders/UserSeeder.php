<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = (int)$this->command->ask('How many users do you need ?', 1);

        $this->command->info("Creating {$count} users.");
        User::factory($count)->create();

        //User::factory(1)->create();
    }
}
