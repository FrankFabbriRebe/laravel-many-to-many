<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// include model
use App\Models\Type;

class TypesController extends Controller
{

    public function index()
    {

        return view('pages.types.index');

    }

}
