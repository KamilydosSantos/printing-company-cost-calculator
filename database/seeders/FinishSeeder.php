<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Finish;

class FinishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Finish::factory()->count(5)->create();
    }
}
