<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name' => $name = 'Game',
                'slug' => Str::slug($name),
            ],
            [
                'name' => $name = 'Sport',
                'slug' => Str::slug($name),
            ],
            [
                'name' => $name = 'Anime',
                'slug' => Str::slug($name),
            ]
        ])->each(fn ($q) => Category::create($q));
    }
}
