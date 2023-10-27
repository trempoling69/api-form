<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $category1Id = Category::where('name', 'Category1')->first()->id;
        $category2Id = Category::where('name', 'Category2')->first()->id;
        $category3Id = Category::where('name', 'Category3')->first()->id;
        $category4Id = Category::where('name', 'Category4')->first()->id;

        Skill::create([
            'name' => 'skill1_category1',
            'category_id' => $category1Id
        ]);
        Skill::create([
            'name' => 'skill2_category1',
            'category_id' => $category1Id
        ]);
        Skill::create([
            'name' => 'skill1_category2',
            'category_id' => $category2Id
        ]);
        Skill::create([
            'name' => 'skill2_category2',
            'category_id' => $category2Id
        ]);
        Skill::create([
            'name' => 'skill1_category3',
            'category_id' => $category3Id
        ]);
        Skill::create([
            'name' => 'skill2_category3',
            'category_id' => $category3Id
        ]);
        Skill::create([
            'name' => 'skill1_category4',
            'category_id' => $category4Id
        ]);
        Skill::create([
            'name' => 'skill2_category4',
            'category_id' => $category4Id
        ]);
    }
}
