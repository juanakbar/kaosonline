<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            ['name' => 'Premium', 'description' => 'Cotton Combed 30s, Bahan Halus'],
            ['name' => 'Super Premium', 'description' => '100% Ring Spun 24s, Bahan Lebih Halus, Jahitan Rapih'],
        ])->each(fn ($q) => Material::create($q));
    }
}
