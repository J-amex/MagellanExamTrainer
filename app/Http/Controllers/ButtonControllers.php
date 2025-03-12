<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ButtonControllers extends Controller
{
    public function startTraining(Request $request)
    {
        
        $category = $request->query('category');

        
        return view('employee.training', compact('category'));
    }
}
