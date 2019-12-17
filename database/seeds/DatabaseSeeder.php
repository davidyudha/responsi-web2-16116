<?php

use Illuminate\Database\Seeder;
use App\Jobs;
use App\Employees;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Employees::class,150)->create();
        factory(Jobs::class,10)->create();
    }
}
