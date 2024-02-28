<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import model
use App\Models\Technology;

class ApiController extends Controller
{
    public function getTechnologies()
    {
        $technologies = Technology::all();

        return response()->json([
            'technologies' => $technologies,
        ]);
    }
}
