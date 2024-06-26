<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Brand::factory(10)->create();
        \App\Models\Product::factory(10)->create();
        \App\Models\Purchase::factory(10)->create();
        \App\Models\SoldProduct::factory(10)->create();
        // Category::factory()->count(10)->create();
    }
}
