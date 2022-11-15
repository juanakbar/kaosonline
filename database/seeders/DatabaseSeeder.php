<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            SizeSeeder::class,
            ColorSeeder::class,
            MaterialSeeder::class,
        ]);

        Product::factory(100)->create();
    }
}
