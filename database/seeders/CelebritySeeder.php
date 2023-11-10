<?php

namespace Database\Seeders;

use App\Models\Celebrity;
use App\Models\Theme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CelebritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //


        $profilArray = ['IEDM', 'IEDF', 'IECM', 'IECF', 'IODM', 'IODF', 'IOCM', 'IOCF', 'AEDM', 'AEDF', 'AECM', 'AECF', 'AODM', 'AODF', 'AOCM', 'AOCF'];

        $profilCollection = collect($profilArray);
        $profilCollection->map(function ($profil, $index) {
            $themeId = Theme::where('name', 'Superhero')->first()->id;
            Celebrity::create([
                "name" => "celebrity_" . ($index + 1),
                "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id accusamus, nulla ullam ipsum quisquam aliquid animi. Adipisci dolore itaque sunt sit odio assumenda nulla quod tenetur unde nobis? Sequi, fugiat.",
                'theme_id' => $themeId,
                'profil' => $profil,
                'photo' => 'https://fr.web.img6.acsta.net/r_654_368/newsv7/21/02/26/18/51/4272278.jpg'
            ]);
        });
    }
}
