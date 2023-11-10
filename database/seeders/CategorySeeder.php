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
        //
        Category::create([
            'name' => 'Creativite',
        ]);
        Category::create([
            'name' => 'Communication',
        ]);
        Category::create([
            'name' => 'Esprit critique',
        ]);
        Category::create([
            'name' => 'Cooperation',
        ]);
    }
}
