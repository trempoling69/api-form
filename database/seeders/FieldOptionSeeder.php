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
        $field1Id = Field::where('name', 'Question_1')->first()->id;
        $field2Id = Field::where('name', 'Question_2')->first()->id;
        $skill_A_Id = Skill::where('letter', 'A')->first()->id;
        $skill_I_Id = Skill::where('letter', 'I')->first()->id;


        $field3Id = Field::where('name', 'Question_3')->first()->id;
        $field4Id = Field::where('name', 'Question_4')->first()->id;
        $skill_E_Id = Skill::where('letter', 'E')->first()->id;
        $skill_O_Id = Skill::where('letter', 'O')->first()->id;


        $field5Id = Field::where('name', 'Question_5')->first()->id;
        $field6Id = Field::where('name', 'Question_6')->first()->id;
        $skill_C_Id = Skill::where('letter', 'C')->first()->id;
        $skill_D_Id = Skill::where('letter', 'D')->first()->id;


        $field7Id = Field::where('name', 'Question_7')->first()->id;
        $field8Id = Field::where('name', 'Question_8')->first()->id;
        $skill_M_Id = Skill::where('letter', 'M')->first()->id;
        $skill_F_Id = Skill::where('letter', 'F')->first()->id;




        //QUESTION 1
        FieldOption::create([
            'label' => 'Revisitez les lasagnes de son enfance en ajoutant un peu de piquant avec une petite pointe de tabasco',
            'ratio' => 1,
            'field_id' => $field1Id,
            'skill_id' => $skill_A_Id,
        ]);
        FieldOption::create([
            'label' => 'Tentez le tout pour le tout en lui proposant un service en 3 plats à base de son ingrédient préféré',
            'ratio' => 1,
            'field_id' => $field1Id,
            'skill_id' => $skill_I_Id,
        ]);
        // FieldOption::create([
        //     'label' => 'option_3',
        //     'ratio' => 2,
        //     'field_id' => $field1Id,
        //     'skill_id' => $skill2_C1_Id,
        // ]);
        // FieldOption::create([
        //     'label' => 'option_4',
        //     'ratio' => 2,
        //     'field_id' => $field1Id,
        //     'skill_id' => $skill1_C1_Id,
        // ]);

        //QUESTION 2
        FieldOption::create([
            'label' => "Enquêter pour trouver l'élément manquant dans sa dernière collection",
            'ratio' => 1,
            'field_id' => $field2Id,
            'skill_id' => $skill_A_Id,
        ]);
        FieldOption::create([
            'label' => 'Construire un jeu de piste le menant à son cadeau tout en se découvrant en chemin',
            'ratio' => 1,
            'field_id' => $field2Id,
            'skill_id' => $skill_I_Id,
        ]);
        // FieldOption::create([
        //     'label' => 'option_3',
        //     'ratio' => 2,
        //     'field_id' => $field2Id,
        //     'skill_id' => $skill2_C2_Id,
        // ]);
        // FieldOption::create([
        //     'label' => 'option_4',
        //     'ratio' => 2,
        //     'field_id' => $field2Id,
        //     'skill_id' => $skill1_C2_Id,
        // ]);

        //QUESTION 3
        FieldOption::create([
            'label' => 'Lui posez des questions pour essayer de comprendre son ressenti et celui de son ou sa partenaire',
            'ratio' => 1,
            'field_id' => $field3Id,
            'skill_id' => $skill_E_Id,
        ]);
        FieldOption::create([
            'label' => "Lui expliquez comment votre dernière dispute vous a amené à renouveler vos vœux lors d'une fête épique",
            'ratio' => 1,
            'field_id' => $field3Id,
            'skill_id' => $skill_O_Id,
        ]);
        // FieldOption::create([
        //     'label' => 'option_3',
        //     'ratio' => 2,
        //     'field_id' => $field3Id,
        //     'skill_id' => $skill2_C3_Id,
        // ]);
        // FieldOption::create([
        //     'label' => 'option_4',
        //     'ratio' => 2,
        //     'field_id' => $field3Id,
        //     'skill_id' => $skill1_C3_Id,
        // ]);

        //QUESTION 4
        FieldOption::create([
            'label' => "Préparez minutieusement vos arguments en amont, en listant l'ensemble de vos succès et en essayant de prévoir les objections",
            'ratio' => 1,
            'field_id' => $field4Id,
            'skill_id' => $skill_O_Id,
        ]);
        FieldOption::create([
            'label' => "Lancez la conversation en lui demandant ce qu'il pense de votre travail et quelles perspectives d'évolution il voit pour vous à court terme puis embrayez sur votre demande.",
            'ratio' => 1,
            'field_id' => $field4Id,
            'skill_id' => $skill_E_Id,
        ]);
        // FieldOption::create([
        //     'label' => 'option_3',
        //     'ratio' => 2,
        //     'field_id' => $field4Id,
        //     'skill_id' => $skill2_C4_Id,
        // ]);
        // FieldOption::create([
        //     'label' => 'option_4',
        //     'ratio' => 2,
        //     'field_id' => $field4Id,
        //     'skill_id' => $skill1_C4_Id,
        // ]);

        //QUESTION 5
        FieldOption::create([
            'label' => "Faites une liste exhaustive de toutes les activités possibles et la soumettez à vos compagnons de voyage pour faciliter l'organisation",
            'ratio' => 1,
            'field_id' => $field5Id,
            'skill_id' => $skill_C_Id,
        ]);
        FieldOption::create([
            'label' => "Vous dites que peu importe ce que vous déciderez sur place, l'essentiel c'est que vous serez en en bonne compagnie et donc vous passerez un bon séjour",
            'ratio' => 1,
            'field_id' => $field5Id,
            'skill_id' => $skill_D_Id,
        ]);
        // FieldOption::create([
        //     'label' => 'option_3',
        //     'ratio' => 2,
        //     'field_id' => $field7Id,
        //     'skill_id' => $skill2_C1_Id,
        // ]);
        // FieldOption::create([
        //     'label' => 'option_4',
        //     'ratio' => 2,
        //     'field_id' => $field7Id,
        //     'skill_id' => $skill1_C1_Id,
        // ]);

        //QUESTION 6 
        FieldOption::create([
            'label' => "Les partis et les valeurs qu'ils défendent",
            'ratio' => 1,
            'field_id' => $field6Id,
            'skill_id' => $skill_D_Id,
        ]);
        FieldOption::create([
            'label' => 'Les professions de foi et programmes détaillés sur le site de chaque candidat',
            'ratio' => 1,
            'field_id' => $field6Id,
            'skill_id' => $skill_C_Id,
        ]);
        // FieldOption::create([
        //     'label' => 'option_3',
        //     'ratio' => 2,
        //     'field_id' => $field6Id,
        //     'skill_id' => $skill2_C2_Id,
        // ]);
        // FieldOption::create([
        //     'label' => 'option_4',
        //     'ratio' => 2,
        //     'field_id' => $field6Id,
        //     'skill_id' => $skill1_C2_Id,
        // ]);

        //QUESTION 7
        FieldOption::create([
            'label' => 'Prenez votre cahier, et mettez au clair vos idées pour comprendre les causes et identifiez en face les solutions et ressources à votre disposition pour rattraper le retard.',
            'ratio' => 1,
            'field_id' => $field7Id,
            'skill_id' => $skill_M_Id,
        ]);
        FieldOption::create([
            'label' => "Vous convoquez une réunion d'équipe et demandez à chacun de redoubler d'effort pour tenir vos objectifs",
            'ratio' => 1,
            'field_id' => $field7Id,
            'skill_id' => $skill_F_Id,
        ]);
        // FieldOption::create([
        //     'label' => 'option_3',
        //     'ratio' => 2,
        //     'field_id' => $field5Id,
        //     'skill_id' => $skill2_C3_Id,
        // ]);
        // FieldOption::create([
        //     'label' => 'option_4',
        //     'ratio' => 2,
        //     'field_id' => $field5Id,
        //     'skill_id' => $skill1_C3_Id,
        // ]);

        //QUESTION 8
        FieldOption::create([
            'label' => 'Êtes un bon petit soldat et remplissez toutes les tâches qui vous sont confiés',
            'ratio' => 1,
            'field_id' => $field8Id,
            'skill_id' => $skill_F_Id,
        ]);
        FieldOption::create([
            'label' => 'Faites le tour de la famille et demandez à chacun de prendre une tâche parmi la liste',
            'ratio' => 1,
            'field_id' => $field8Id,
            'skill_id' => $skill_M_Id,
        ]);
        // FieldOption::create([
        //     'label' => 'option_3',
        //     'ratio' => 2,
        //     'field_id' => $field8Id,
        //     'skill_id' => $skill_M_Id,
        // ]);
        // FieldOption::create([
        //     'label' => 'option_4',
        //     'ratio' => 2,
        //     'field_id' => $field8Id,
        //     'skill_id' => $skill_F_Id,
        // ]);
    }
}
