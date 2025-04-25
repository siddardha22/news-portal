<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {




        $categories = [
             ['name' => 'Politics',],
             ['name' => 'Business'],
             ['name' => 'Corporate'],
             ['name' => 'Health'],
             ['name' => 'Education'],
             ['name' => 'Science'],
             ['name' => 'Foods'],
             ['name' => 'Business'],
             ['name' => 'Entertainment'],
             ['name' => 'Travel'],
             ['name' => 'Lifestyle'],
        ];
        foreach ($categories as $category) {
            Category::updateOrCreate($category);
        }
    }
}
