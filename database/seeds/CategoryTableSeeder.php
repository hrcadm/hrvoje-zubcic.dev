<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Development', 'News', 'Tutorials', 'Reviews', 'Personal Insights'];

        foreach($categories as $category)
        {
            Category::create([
                'name' => $category,
            ]);
        }
    }
}
