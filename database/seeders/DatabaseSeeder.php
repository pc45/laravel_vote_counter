<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Idea;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //User::factory(10)->create();

        Category::factory()->create(['name'=> 'Category 1']);
        Category::factory()->create(['name'=> 'Category 2']);
        Category::factory()->create(['name'=> 'Category 3']);
        Category::factory()->create(['name'=> 'Category 4']);

        Idea::factory(30)->create();
    }
}
