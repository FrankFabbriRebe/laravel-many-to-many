<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import model
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {

        $projects = Project::all();

        return view('pages.index', compact("projects"));

    }

    public function create()
    {

        return view('pages.create');

    }

}
