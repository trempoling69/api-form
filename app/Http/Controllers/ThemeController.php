<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    //
    public function getTheme()
    {
        $themes = Theme::all();
        return response()->json([
            'status' => 200,
            "data" => $themes
        ]);
    }
}
