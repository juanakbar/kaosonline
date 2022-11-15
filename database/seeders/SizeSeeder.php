<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            ['size' => 'XS'],
            ['size' => 'S'],
            ['size' => 'M'],
            ['size' => 'L'],
            ['size' => 'XL'],
            ['size' => 'XXL']
        ])->each(fn ($q) => Size::create($q));
    }
}
