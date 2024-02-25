<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import model
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;


class ProjectsController extends Controller
{
    public function index()
    {

        $projects = Project::all();

        return view('pages.index', compact("projects"));

    }

    public function create()
    {

        $types = Type::all();
        $technologies = Technology::all();

        return view('pages.create', compact("technologies", "types"));

    }

    public function store(Request $request)
    {

        $data = $request->all();

        $type = Type::find($data['type_id']);

        $newProject = new Project();

        $newProject->name = $data['name'];
        $newProject->author = $data['author'];

        $newProject->type()->associate($type);

        $newProject->save();

        $newProject->technologies()->attach($data['technology_id']);

        return redirect()->route('route.index');
    }

}
