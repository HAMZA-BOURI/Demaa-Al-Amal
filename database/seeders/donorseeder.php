<?php

namespace Database\Seeders;

use App\Models\donor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class donorseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        donor::factory(5)->create();
    }
}
