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
        $category1Id = Category::where('name', 'Creativite')->first()->id;
        $category2Id = Category::where('name', 'Communication')->first()->id;
        $category3Id = Category::where('name', 'Esprit critique')->first()->id;
        $category4Id = Category::where('name', 'Cooperation')->first()->id;

        Skill::create([
            'name' => 'Inventeur',
            'letter' => 'I',
            'category_id' => $category1Id
        ]);
        Skill::create([
            'name' => 'Ameliorateur',
            'letter' => 'A',
            'category_id' => $category1Id
        ]);
        Skill::create([
            'name' => 'Ecoute',
            'letter' => 'E',
            'category_id' => $category2Id
        ]);
        Skill::create([
            'name' => 'Orateur',
            'letter' => 'O',
            'category_id' => $category2Id
        ]);
        Skill::create([
            'name' => 'Detachement',
            'letter' => 'D',
            'category_id' => $category3Id
        ]);
        Skill::create([
            'name' => 'Chercheur',
            'letter' => 'C',
            'category_id' => $category3Id
        ]);
        Skill::create([
            'name' => 'Meta',
            'letter' => 'M',
            'category_id' => $category4Id
        ]);
        Skill::create([
            'name' => 'Fonceur',
            'letter' => 'F',
            'category_id' => $category4Id
        ]);
    }
}
