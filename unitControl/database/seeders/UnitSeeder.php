<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unit;


class UnitSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Unit::factory(100)->create();
    }
}