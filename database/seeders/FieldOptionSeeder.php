<?php

namespace Database\Seeders;

use App\Models\Field;
use App\Models\FieldOption;
use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FieldOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $field1Id = Field::where('label', 'Question_1')->first()->id;
        $skill1_C1_Id = Skill::where('name', 'skill1_category1')->first()->id;
        $skill2_C1_Id = Skill::where('name', 'skill2_category1')->first()->id;


        $field2Id = Field::where('label', 'Question_2')->first()->id;
        $skill1_C2_Id = Skill::where('name', 'skill1_category2')->first()->id;
        $skill2_C2_Id = Skill::where('name', 'skill2_category2')->first()->id;

        $field3Id = Field::where('label', 'Question_3')->first()->id;
        $skill1_C3_Id = Skill::where('name', 'skill1_category3')->first()->id;
        $skill2_C3_Id = Skill::where('name', 'skill2_category3')->first()->id;

        $field4Id = Field::where('label', 'Question_4')->first()->id;
        $skill1_C4_Id = Skill::where('name', 'skill1_category4')->first()->id;
        $skill2_C4_Id = Skill::where('name', 'skill2_category4')->first()->id;
        FieldOption::create([
            'label' => 'option_1',
            'ratio' => 1,
            'field_id' => $field1Id,
            'skill_id' => $skill1_C1_Id,
        ]);
        FieldOption::create([
            'label' => 'option_2',
            'ratio' => 1,
            'field_id' => $field1Id,
            'skill_id' => $skill2_C1_Id,
        ]);
        FieldOption::create([
            'label' => 'option_1',
            'ratio' => 1,
            'field_id' => $field2Id,
            'skill_id' => $skill1_C2_Id,
        ]);
        FieldOption::create([
            'label' => 'option_2',
            'ratio' => 1,
            'field_id' => $field2Id,
            'skill_id' => $skill2_C2_Id,
        ]);
        FieldOption::create([
            'label' => 'option_1',
            'ratio' => 1,
            'field_id' => $field3Id,
            'skill_id' => $skill1_C3_Id,
        ]);
        FieldOption::create([
            'label' => 'option_2',
            'ratio' => 1,
            'field_id' => $field3Id,
            'skill_id' => $skill2_C3_Id,
        ]);
        FieldOption::create([
            'label' => 'option_1',
            'ratio' => 1,
            'field_id' => $field4Id,
            'skill_id' => $skill1_C4_Id,
        ]);
        FieldOption::create([
            'label' => 'option_2',
            'ratio' => 1,
            'field_id' => $field4Id,
            'skill_id' => $skill2_C4_Id,
        ]);
    }
}