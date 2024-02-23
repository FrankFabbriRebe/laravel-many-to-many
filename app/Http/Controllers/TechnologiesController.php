<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechnologiesController extends Controller
{
    public function index()
    {

        return view('pages.technologies.index');

    }
}
