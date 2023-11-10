<?php

namespace Database\Seeders;

use App\Models\Theme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Theme::create([
            'name' => 'Superhero',
            'label' => 'Quel super-héros je suis ?',
            'photo' => 'https://resize-public.ladmedia.fr/r/641,/img/var/public/storage/images/news/quiz-quel-super-heros-marvel-sommeille-en-vous-1487138/38810344-1-fre-FR/Quiz-Quel-super-heros-Marvel-sommeille-en-vous.jpg'
        ]);
    }
}
