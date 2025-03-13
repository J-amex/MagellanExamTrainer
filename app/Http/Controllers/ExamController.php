<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    //
    public function nextQuestion(Request $request)
    {
        $currentIndex = $request->input('currentIndex');
        return response()->json(['nextIndex' => $currentIndex + 1]);
    }
}
