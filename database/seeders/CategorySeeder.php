<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public $categories = [

        // incomes
        ['id' => 1, 'category_type' => 'income', 'name' => 'job'],
        ['id' => 2, 'category_type' => 'income', 'name' => 'freelance'],
        ['id' => 3, 'category_type' => 'income', 'name' => 'overtime'],

        // expense
        ['id' => 12, 'category_type' => 'expense', 'name' => 'apartment rental'],
        ['id' => 14, 'category_type' => 'expense', 'name' => 'tution fee'],
        ['id' => 17, 'category_type' => 'expense', 'name' => 'food purchase'],
        ['id' => 18, 'category_type' => 'expense', 'name' => 'refreshment'],
        ['id' => 22, 'category_type' => 'expense', 'name' => 'savings'],

        // income
        ['id' => 23, 'category_type' => 'income', 'name' => 'bonus'],

    ];

    public function run(): void
    {
        foreach ($this->categories as $category) {
            Category::create($category);
        }
    }
}
