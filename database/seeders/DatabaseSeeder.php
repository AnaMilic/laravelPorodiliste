<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DoktorSeeder;
use Database\Seeders\BebaSeeder;
use Database\Seeders\PorodilisteSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $bseeder = new BebaSeeder();
        $dseeder = new DoktorSeeder();
        $pseeder = new PorodilisteSeeder();

        $bseeder->run();
        $dseeder->run();
        $pseeder->run();
    }
}
