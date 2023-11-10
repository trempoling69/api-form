<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Celebrity;
use App\Models\FieldOption;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    // dieu seul sait comment ça marche
    public function postAnswer(Request $request)
    {
        $contenuRequete = $request->all();
        $skill = array();
        foreach ($contenuRequete['values'] as $questionLabel => $value) {
            $opt = FieldOption::where('id', $value)->with('skills.categories')->first();
            $skill[] = $opt;
        }
        $collection = collect($skill);

        $groupedData = $collection->groupBy('skills.categories.id')
            ->map(function ($items) {
                $allskill = $items->groupBy('skills.id')->map(function ($skil) {
                    $totalRatio = $skil->sum('ratio');
                    return ['skill_id' => $skil->first()['skills']['id'], 'ratio' => $totalRatio];
                })->values()->toArray();
                return [
                    'category_id' => $items->first()['skills']['categories']['id'],
                    'allskill' => $allskill,
                ];
            })->values()->toArray();

        $collection2 = collect($groupedData);

        $bestSkillByCategory = $collection2->map(function ($item) {
            $bestSkill = collect($item['allskill'])->reduce(function ($carry, $skill) {
                return ($skill['ratio'] > $carry['ratio']) ? $skill : $carry;
            }, ['skill_id' => null, 'ratio' => 0]);

            return [
                'category_id' => $item['category_id'],
                'skill_id' => $bestSkill['skill_id'],
            ];
        })->values()->toArray();

        //ORDRE DANS LEQUEL AFFICHER LES CATEGORIES METTRE DES ID DES CATEGORIES
        $categoriesOrder = [1, 2, 3, 4];

        $collection3 = collect($bestSkillByCategory);

        $groupedSkills = $collection3->mapToGroups(function ($item) {
            $category_id = $item['category_id'];
            $skillLetter = Skill::where('id', $item['skill_id'])->first()->letter;
            return [$category_id => $skillLetter];
        });

        $sortedSkills = $groupedSkills->sortBy(function ($skills, $category_id) use ($categoriesOrder) {
            return array_search($category_id, $categoriesOrder);
        });

        $profil = '';
        foreach ($sortedSkills as $values) {
            $profil .= $values[0];
        }

        $answerCreated = Answer::create([
            "profil" => $profil,
            "form_id" => $contenuRequete['form_id'],
            "answer_raw" => json_encode($contenuRequete['values']),
            "user_id" => Auth::id()
        ]);

        $toSend = [
            'skill' => $contenuRequete['values'],
            'total' => $groupedData,
            'bestSkill' => $bestSkillByCategory,
            'profilss' => $sortedSkills,
            'profil' => $profil
        ];
        return response()->json(['status' => 201, 'data' => $answerCreated]);
    }

    public function getAnswerById(string $answerId)
    {
        $answer = Answer::where('id', $answerId)->with('forms')->first();
        $celebrity = Celebrity::where('theme_id', $answer->forms->theme_id)->where('profil', $answer->profil)->first();
        $response = ["answer" => $answer, "celebrity" => $celebrity];
        return response()->json([
            'status' => 200,
            'data' => $response
        ]);
    }
}
