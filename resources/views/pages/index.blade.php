@extends('layouts.main-layout')

@section('head')
<title>Projects</title>
@endsection

@section('content')
<h1>Project list</h1>
<ul>
    @foreach ($projects as $project)
    <li>

        <h3>Project name: </h3>
        <span>{{ $project -> name }}</span>
        <br>

        <strong>Type name: </strong>
        <span>{{ $project -> type -> name}}</span>

        <span>
            <strong>Technology name: </strong>
            @foreach ($project -> technologies as $technology)
            #{{ $technology -> name }}
            @endforeach
        </span>

    </li>
    @endforeach
</ul>
@endsection