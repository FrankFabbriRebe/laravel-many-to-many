<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        $img_path = Storage::put('uploads', $data['image']);

        $newProject = new Project();

        $newProject->name = $data['name'];
        $newProject->author = $data['author'];
        $newProject->image = $img_path;


        $newProject->type()->associate($type);

        $newProject->save();

        $newProject->technologies()->attach($data['technology_id']);

        return redirect()->route('route.index');
    }

    public function edit($id)
    {

        $project = Project::find($id);

        $types = Type::all();
        $technologies = Technology::all();

        return view('pages.edit', compact('project', 'types', 'technologies'));

    }

    public function update(Request $request, $id)
    {

        $data = $request->all();

        $type = Type::find($data['type_id']);

        $project = Project::find($id);
        $project->name = $data['name'];
        $project->author = $data['author'];

        $project->type()->associate($type);

        $project->save();

        $project->technologies()->sync($data['technology_id']);

        return redirect()->route('route.index');

    }

}
