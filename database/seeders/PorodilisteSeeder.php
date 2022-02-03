<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Porodiliste;

class PorodilisteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Porodiliste::factory()->count(25)->create();
    }
}
