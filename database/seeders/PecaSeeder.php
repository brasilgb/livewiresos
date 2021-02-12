<?php

namespace Database\Seeders;

use App\Models\Peca;
use Illuminate\Database\Seeder;

class PecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Peca::factory()->count(40)->create();
    }
}
