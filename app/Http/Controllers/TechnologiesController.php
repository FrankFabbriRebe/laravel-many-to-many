<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import model
use App\Models\Technology;

class TechnologiesController extends Controller
{
    public function index()
    {

        $technologies = Technology::all();

        return view('pages.technologies.index', compact("technologies"));

    }
}
