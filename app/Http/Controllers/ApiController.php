<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import model
use App\Models\Project;

class ApiController extends Controller
{
    public function getProjects()
    {
        $projects = Project::all();

        return response()->json([
            'projects' => $projects,
        ]);
    }
}
