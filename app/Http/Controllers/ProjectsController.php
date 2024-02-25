<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import model
use App\Models\Project;
use App\Models\Technology;


class ProjectsController extends Controller
{
    public function index()
    {

        $projects = Project::all();

        return view('pages.index', compact("projects"));

    }

    public function create()
    {

        $technologies = Technology::all();

        return view('pages.create', compact("technologies"));

    }

}
