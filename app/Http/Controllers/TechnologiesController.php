<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import model
use App\Models\Technology;

class TechnologiesController extends Controller
{
    public function index()
    {

        return view('pages.technologies.index');

    }
}
