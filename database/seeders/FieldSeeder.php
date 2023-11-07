<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Field;
use App\Models\Form;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $formId = Form::where('title', 'Form1')->first()->id;
        $category1Id = Category::where('name', 'Category1')->first()->id;
        $category2Id = Category::where('name', 'Category2')->first()->id;
        $category3Id = Category::where('name', 'Category3')->first()->id;
        $category4Id = Category::where('name', 'Category4')->first()->id;

        Field::create([
            'label' => 'Question_1',
            'order' => 1,
            'category_id' => $category1Id,
            'form_id' => $formId,
        ]);
        Field::create([
            'label' => 'Question_2',
            'order' => 2,
            'category_id' => $category2Id,
            'form_id' => $formId,
        ]);
        Field::create([
            'label' => 'Question_3',
            'order' => 3,
            'category_id' => $category3Id,
            'form_id' => $formId,
        ]);
        Field::create([
            'label' => 'Question_4',
            'order' => 4,
            'category_id' => $category4Id,
            'form_id' => $formId,
        ]);
        Field::create([
            'label' => 'Question_5',
            'order' => 5,
            'category_id' => $category3Id,
            'form_id' => $formId,
        ]);
        Field::create([
            'label' => 'Question_6',
            'order' => 6,
            'category_id' => $category2Id,
            'form_id' => $formId,
        ]);
        Field::create([
            'label' => 'Question_7',
            'order' => 7,
            'category_id' => $category1Id,
            'form_id' => $formId,
        ]);
        Field::create([
            'label' => 'Question_8',
            'order' => 8,
            'category_id' => $category4Id,
            'form_id' => $formId,
        ]);
    }
}
