<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Field;
use App\Models\FieldOption;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function getForm(string $theme_id)
    {
        $form = Form::where('theme_id', $theme_id)->with('fields.fieldOptions')->first();
        return response()->json([
            'status' => 200,
            "data" => $form
        ]);
    }
}
