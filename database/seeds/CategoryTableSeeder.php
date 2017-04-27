<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        Category::create(['name' => 'National']);
        Category::create(['name' => 'International']);
        
    }
}