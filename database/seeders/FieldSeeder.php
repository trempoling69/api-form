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
        $category1Id = Category::where('name', 'Creativite')->first()->id;
        $category2Id = Category::where('name', 'Communication')->first()->id;
        $category3Id = Category::where('name', 'Esprit critique')->first()->id;
        $category4Id = Category::where('name', 'Cooperation')->first()->id;

        Field::create([
            'name' => 'Question_1',
            'label' => "Ce soir c'est la fête, vous avez décidé de préparer un bon petit plat pour faire plaisir à votre moitié. Pour lui faire plaisir vous :",
            'order' => 1,
            'category_id' => $category1Id,
            'form_id' => $formId,
        ]);
        Field::create([
            'name' => 'Question_2',
            'label' => "Pour l'anniversaire d'un(e) ami(e), vous préférez :",
            'order' => 2,
            'category_id' => $category1Id,
            'form_id' => $formId,
        ]);
        Field::create([
            'name' => 'Question_3',
            'label' => 'Un(e) ami(e) vous demande conseil sur la façon de gérer un conflit dans son couple, vous :',
            'order' => 3,
            'category_id' => $category2Id,
            'form_id' => $formId,
        ]);
        Field::create([
            'name' => 'Question_4',
            'label' => ' Vous voulez demander une augmentation à votre responsable, pour mettre toutes les chances de votre côté vous :',
            'order' => 4,
            'category_id' => $category2Id,
            'form_id' => $formId,
        ]);
        Field::create([
            'name' => 'Question_5',
            'label' => 'Quand vous partez en vacances entre amis, vous :',
            'order' => 5,
            'category_id' => $category3Id,
            'form_id' => $formId,
        ]);
        Field::create([
            'name' => 'Question_6',
            'label' => "Lors d'une élection, vous basez votre décision sur :",
            'order' => 6,
            'category_id' => $category3Id,
            'form_id' => $formId,
        ]);
        Field::create([
            'name' => 'Question_7',
            'label' => "C'est la catastrophe, votre dernier projet a pris un mois de retard, vous :",
            'order' => 7,
            'category_id' => $category4Id,
            'form_id' => $formId,
        ]);
        Field::create([
            'name' => 'Question_8',
            'label' => "Réunion de famille ! Vous vous retrouvez pour quelques jours avec toute la famille dans une maison à la campagne. C'est une sacré logistique, pour la faciliter, vous :",
            'order' => 8,
            'category_id' => $category4Id,
            'form_id' => $formId,
        ]);
    }
}
