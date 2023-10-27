<?php

namespace Database\Seeders;

use App\Models\Form;
use App\Models\Theme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $themeId = Theme::where('name', 'Theme1')->first()->id;
        Form::create([
            'title' => 'Form1',
            'theme_id' => $themeId,
        ]);
    }
}
